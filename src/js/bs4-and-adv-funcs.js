
// prepare querySelectors for OPTIONAL
console.clear();
const qs = selector => document.querySelector(selector);
const qsa = selector => document.querySelectorAll(selector);



// Prepare disable autofill
// https://github.com/biesbjerg/jquery.disable-autofill
(function ($, window, document, undefined) {
  var pluginName = 'disableAutofill';
  var defaults = {};
  function Plugin(element, options) {
    this.element = element;
    this.options = $.extend({}, defaults, options);
    this._defaults = defaults;
    this._name = pluginName;
    this.initialize();
  }
  Plugin.prototype.initialize = function () {
    var $element = $(this.element);
    $element.
    val($element.attr('value')).
    clone().
    removeAttr('id class required').
    insertBefore(this.element).
    hide();
  };
  $.fn[pluginName] = function (options) {
    return this.each(function () {
      if (!$.data(this, 'plugin_' + pluginName)) {
        $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
      }
    });
  };
})(jQuery, window, document);
// -----------------------------------------------------------------------------



// function disableAutofill plus BS4 JS init
$(function () {
  $('input[autofill="off"]').disableAutofill();

  // init scrollspy
  $('body').scrollspy({ target: '#quick-nav' });
  //   // $('body').attr('data-spy', 'scroll').attr('data-target', '#quick-nav');

  //ensure anchor nav
  $('button, a').not('ul#quick-nav a').on('click', e => {
    e.preventDefault();
  });


// init BT4 modals
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var modal = $(this);
    modal.find('.modal-title').text('New message to ' + recipient);
    modal.find('.modal-body input').val(recipient);
  });

// init BT4 tooltip
  $('#demo-component [data-toggle="tooltip"]').tooltip({
    boundary: 'window',
    container: '#component' // fix position
  });

  // init BT4 popover
  $('#popovers [data-toggle="popover"]').popover({
    boundary: 'window',
    container: '#component', // fix position
    trigger: 'focus' });

});



// Checkbox indeterminate
defaultCheck3.indeterminate = true;
customCheck9.indeterminate = true;
customCheck19.indeterminate = true;



// Show Password pure js using font-awesome
btnShowPassword.addEventListener('click', function () {
  showPassword.type = showPassword.type === 'password' ? 'text' : 'password';

  let icon = this.querySelector('svg');
  if (icon.getAttribute('data-icon') == 'eye') {
    icon.setAttribute('data-icon', 'eye-slash');
  } else {
    icon.setAttribute('data-icon', 'eye');
  };
});



// Smooth scroll
(function () {
  const toTarget = qsa('#quick-nav a[href^="#"]');
  function smoothScroll(target, duration) {
    const targetId = target.getAttribute('href');
    const headerHeight = 128;
    const targetPosition = qs(targetId).offsetTop + headerHeight;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    let start = null;

    function animation(currentTime) {
      if (!start) start = currentTime;
      const progress = currentTime - start;
      let run = easeInOutExpo(progress, startPosition, distance, duration);
      // window.scrollTo(0, distance*(progress/duration) + startPosition);
      window.scrollTo(0, run);
      if (progress < duration) window.requestAnimationFrame(animation);
    }

    // http://gizma.com/easing/
    function easeInOutExpo(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
      t--;
      return c / 2 * (-Math.pow(2, -10 * t) + 2) + b;
    };

    window.requestAnimationFrame(animation);
  }
  toTarget.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      smoothScroll(item, 1000);
    });
  });
})();



// OPTIONAL FORM CONTROLS
qs('#example-input-types-form-control-range').addEventListener('input', function () {
  qs('#example-input-types-form-control-number').value = this.value;
});
qs('#example-input-types-form-control-number').addEventListener('input', function () {
  qs('#example-input-types-form-control-range').value = this.value;
});

let customColorLabel = qs('.custom-color label');
window.addEventListener('load', function () {
  customColorLabel.innerText = 'Color: ' + customColor.value;
});
customColor.addEventListener('input', function () {
  customColorLabel.innerText = 'Color: ' + this.value;
});