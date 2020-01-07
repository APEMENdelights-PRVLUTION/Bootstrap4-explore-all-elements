<div id="list-group">
    <hr>
    <h3>List Group</h3>
    <hr>
    <div class="example-block">
        <div class="row mb-5">
            <div class="col-6">
                <h5>Basic example</h5>
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-6">
                <h5>Links</h5>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Cras justo odio
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h5>Flush</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div class="col-6">
                <h5>With badges</h5>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge badge-primary badge-pill">1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Porta ac consectetur ac
                        <span class="badge badge-primary badge-pill">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Vestibulum at eros
                        <span class="badge badge-primary badge-pill">3</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Tabbable panes</h5>
        <div class="row mb-5">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                       href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                       href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                       href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                       href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                         aria-labelledby="list-home-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Eum, deleniti? Porro odio, nemo dolorum cum, quia similique suscipit neque nihil nobis ab
                        reiciendis, quae quod quam cupiditate distinctio perspiciatis soluta?
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel"
                         aria-labelledby="list-profile-list">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Ipsum exercitationem excepturi nisi nam commodi doloremque atque ullam tenetur?
                        Consequuntur nisi nemo aspernatur beatae atque accusantium doloribus dolorem praesentium
                        nihil quasi!.
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel"
                         aria-labelledby="list-messages-list">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Assumenda veniam corporis earum voluptate vero magni dolores culpa placeat eius
                        temporibus odio, et impedit natus mollitia ab dolore soluta incidunt suscipit?
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel"
                         aria-labelledby="list-settings-list">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Consectetur, nisi consequuntur. Sequi ut omnis natus nostrum distinctio reiciendis
                        earum quis consectetur repellat officiis dolorum accusantium quod amet, quisquam minima
                        excepturi!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- List group -->
                <div class="list-group" id="myList" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home"
                       role="tab">Home</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages"
                       role="tab">Messages</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings"
                       role="tab">Settings</a>
                </div>

                <!-- Tab panes -->
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="home" role="tabpanel">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Nostrum ut et ea veniam reiciendis vero quidem cupiditate.
                        Atque accusantium, aspernatur praesentium veniam voluptatibus suscipit dignissimos rerum
                        quisquam officia, consequuntur corrupti?
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Expedita illum quaerat tempora vitae nulla ratione cupiditate omnis quidem
                        debitis! Unde vero ab magni neque eligendi quisquam quis illo ipsum maxime?
                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel">Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Ratione incidunt dolorum nulla temporibus itaque aperiam dignissimos
                        molestiae voluptatibus, veritatis explicabo aspernatur cupiditate labore officiis? Maxime
                        dignissimos debitis iure vero repellat?
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Architecto corrupti perferendis eveniet omnis, quis optio eaque id. Est
                        necessitatibus quis neque in aut odit consectetur. Excepturi atque explicabo voluptatum
                        doloremque?
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="example-block">
        <h5>Custom content</h5>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                    varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                    varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                    varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
        </div>
    </div>
</div>
