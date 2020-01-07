<div id="forms">
    <hr>
    <h3>Forms</h3>
    <hr>
    <div class="example-block">
        <h5>Basic</h5>
        <form lpformnum="1">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email" autocomplete="off" autofill="off">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                       autocomplete="off" autofill="off">
            </div>
            <div class="form-check">
                <label class="form-check-label mb-3">
                    <input type="checkbox" class="form-check-input">
                    Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="example-block">
        <h5>Form controls</h5>
        <form lpformnum="2">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple="" class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
    <div class="example-block">
        <h5>Input types</h5>
        <div class="form-group row">
            <label for="example-input-types-form-control-text" class="col-sm-2 col-form-label">Text</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-text" class="form-control" type="text"
                       value="Input text value" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-password" class="form-control" type="password"
                       value="myPa$sW0rd">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-color" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-color" class="form-control" type="color"
                       value="#FF860B">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-date" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-date" class="form-control" type="date"
                       value="2018-05-31">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-datetime-local" class="col-sm-2 col-form-label">Datetime-local</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-datetime-local" class="form-control"
                       type="datetime-local" value="2018-05-31T12:41:47">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-email" class="form-control" type="email"
                       value="someone@email.tld" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-month" class="col-sm-2 col-form-label">Month</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-month" class="form-control" type="month"
                       value="2018-05">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-number" class="col-sm-2 col-form-label">Number</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-number" class="form-control" type="number" min="0"
                       max="255" value="65">
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="example-input-types-form-control-range" class="col-sm-2 col-form-label">Range</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-range" class="form-control-range" type="range" min="1"
                       max="255" value="65">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-serch" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-serch" class="form-control" type="serch"
                       value="Search query" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-tel" class="col-sm-2 col-form-label">Tel</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-tel" class="form-control" type="tel" value="02-111-1111"
                       autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-time" class="col-sm-2 col-form-label">Time</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-time" class="form-control" type="time" value="12:41:47">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-url" class="col-sm-2 col-form-label">Url</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-url" class="form-control" type="url"
                       value="http://example.com" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-week" class="col-sm-2 col-form-label">Week</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-week" class="form-control" type="week" value="2018-W22">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-input-types-form-control-readonly" class="col-sm-2 col-form-label">Readonly</label>
            <div class="col-sm-10">
                <input id="example-input-types-form-control-readonly" class="form-control" type="text"
                       placeholder="Readonly input here…" readonly>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Checkboxes and radios</h5>
        <div class="inline-block">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">checkbox</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck2" checked>
                <label class="form-check-label" for="defaultCheck2">checkbox</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">checkbox</label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="checkbox" id="defaultCheck4" disabled="">
                <label class="form-check-label" for="defaultCheck4">checkbox</label>
            </div>
        </div>
        <div class="inline-block">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                       value="option1">
                <label class="form-check-label" for="exampleRadios1">radio</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                       value="option2" checked>
                <label class="form-check-label" for="exampleRadios2">radio</label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                       value="option3" disabled="">
                <label class="form-check-label" for="exampleRadios3">radio</label>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Checkboxes and radios inline</h5>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                <label class="form-check-label" for="inlineCheckbox4">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option2" checked>
                <label class="form-check-label" for="inlineCheckbox5">2</label>
            </div>
            <div class="form-check form-check-inline disabled">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option3" disabled="">
                <label class="form-check-label" for="inlineCheckbox6">3 (disabled)</label>
            </div>
        </div>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4"
                       value="option1">
                <label class="form-check-label" for="inlineRadio4">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio5"
                       value="option2" checked>
                <label class="form-check-label" for="inlineRadio5">2</label>
            </div>
            <div class="form-check form-check-inline disabled">
                <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio6"
                       value="option3" disabled="">
                <label class="form-check-label" for="inlineRadio6">3 (disabled)</label>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Help text</h5>
        <label for="inputPassword5">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
               value="12345678" autofill="off">
        <small id="passwordHelpBlock" class="form-text text-muted">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
            special characters, or emoji.
        </small>
    </div>
    <div class="example-block">
        <h5>Sizing</h5>
        <div class="mb-3">
            <input class="form-control form-control-lg mb-2" type="text" placeholder=".form-control-lg">
            <input class="form-control mb-2" type="text" placeholder="Default input">
            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
        </div>

        <div>
            <select class="form-control form-control-lg mb-2">
                <option>Large select</option>
            </select>
            <select class="form-control mb-2">
                <option>Default select</option>
            </select>
            <select class="form-control form-control-sm">
                <option>Small select</option>
            </select>
        </div>
    </div>
    <div class="example-block">
        <h5>Disabled forms</h5>
        <form lpformnum="14">
            <fieldset disabled="">
                <div class="form-group">
                    <label for="disabledTextInput">Disabled input</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                           autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Disabled select menu</label>
                    <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                    </select>
                </div>
                <div class="checkbox mb-2">
                    <label>
                        <input type="checkbox"> Can't check this
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>
    <div class="example-block">
        <h5>Validation form</h5>
        <form lpformnum="16">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer01">First name</label>
                    <input type="text" class="form-control is-valid" id="validationServer01"
                           placeholder="First name" value="Mark" required="" autocomplete="off">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer02">Last name</label>
                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name"
                           value="Otto" required="">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer03">City</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City"
                           required="">
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer04">State</label>
                    <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State"
                           required="">
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer05">Zip</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip"
                           required="">
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
    <div class="example-block">
        <h5>Validation form (Tooltips)</h5>
        <form lpformnum="16">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer06">First name</label>
                    <input type="text" class="form-control is-valid" id="validationServer06"
                           placeholder="First name" value="Mark" required="" autocomplete="off">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer07">Last name</label>
                    <input type="text" class="form-control is-valid" id="validationServer07" placeholder="Last name"
                           value="Otto" required="">
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer08">City</label>
                    <input type="text" class="form-control is-invalid" id="validationServer08" placeholder="City"
                           required="">
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer09">State</label>
                    <input type="text" class="form-control is-invalid" id="validationServer09" placeholder="State"
                           required="">
                    <div class="invalid-tooltip">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer10">Zip</label>
                    <input type="text" class="form-control is-invalid" id="validationServer10" placeholder="Zip"
                           required="">
                    <div class="invalid-tooltip">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
    <div class="example-block">
        <h5>File browser</h5>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="example-block">
        <h5>Custom select</h5>
        <select class="custom-select">
            <option selected="">Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="example-block">
        <h5>Custom File browser</h5>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <div class="example-block">
        <h5>Custom checkboxes, toggles and radios</h5>
        <div class="inline-block">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck7">
                <label class="custom-control-label" for="customCheck7">Checkbox default</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck8" checked>
                <label class="custom-control-label" for="customCheck8">Checkbox checked</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck9">
                <label class="custom-control-label" for="customCheck9">Checkbox indeterminated</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck10" checked disabled>
                <label class="custom-control-label" for="customCheck10">Checkbox disabled</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck11" disabled>
                <label class="custom-control-label" for="customCheck11">Checkbox disabled</label>
            </div>
        </div>
        <div class="inline-block">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch12">
                <label class="custom-control-label" for="customSwitch12">Toggle default</label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch13" checked>
                <label class="custom-control-label" for="customSwitch13">Toggle checked</label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch15" checked disabled>
                <label class="custom-control-label" for="customSwitch15">Toggle disabled</label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch16" disabled>
                <label class="custom-control-label" for="customSwitch16">Toggle disabled</label>
            </div>
        </div>
        <div class="inline-block">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Radio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadio2">Radio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadio1" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">Radio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input" disabled>
                <label class="custom-control-label" for="customRadio4">Radio</label>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Custom checkboxes, toggles and radios inline</h5>
        <div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck17">
                <label class="custom-control-label" for="customCheck17">checkbox</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck18" checked>
                <label class="custom-control-label" for="customCheck18">checkbox</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck19">
                <label class="custom-control-label" for="customCheck19">checkbox</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck20" checked disabled>
                <label class="custom-control-label" for="customCheck20">checkbox</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="customCheck21" disabled>
                <label class="custom-control-label" for="customCheck21">checkbox</label>
            </div>
        </div>
        <div>
            <div class="custom-control custom-switch custom-control-inline">
                <input class="custom-control-input" type="checkbox" id="customSwitch22">
                <label class="custom-control-label" for="customSwitch22">toggle</label>
            </div>
            <div class="custom-control custom-switch custom-control-inline">
                <input class="custom-control-input" type="checkbox" id="customSwitch23" checked>
                <label class="custom-control-label" for="customSwitch23">toggle</label>
            </div>
            <div class="custom-control custom-switch custom-control-inline">
                <input class="custom-control-input" type="checkbox" id="customSwitch25" checked disabled>
                <label class="custom-control-label" for="customSwitch52">toggle</label>
            </div>
            <div class="custom-control custom-switch custom-control-inline">
                <input class="custom-control-input" type="checkbox" id="customSwitch26" disabled>
                <label class="custom-control-label" for="customSwitch62">toggle</label>
            </div>
        </div>
        <div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadio5">radio</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadio6">radio</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio7" name="customRadio2" class="custom-control-input">
                <label class="custom-control-label" for="customRadio7">radio</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio8" name="customRadio2" class="custom-control-input" disabled>
                <label class="custom-control-label" for="customRadio8">radio</label>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Show password</h5>
        <div class="form-group mb-0">
            <label for="showPassword">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="showPassword" placeholder="Password"
                       aria-label="Recipient's username" aria-describedby="button-addon2" value="Pa$$w0rd">
                <div class="input-group-append">
                    <button class="btn btn-password btn-password-right bg-white" type="button" id="btnShowPassword">
                        <i class="fas fa-eye"></i></button>
                </div>
            </div>
        </div>

    </div>
    <div class="example-block">
        <h5>Custom Color Input</h5>
        <div class="form-group mb-0">
            <div class="custom-color">
                <label for="customColor">Color</label>
                <input id="customColor" class="form-control" type="color" value="#1872F9">
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Custom select</h5>
        <div class="form-group">
            <select class="custom-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
</div>

