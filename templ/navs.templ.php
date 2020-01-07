<div id="navs">
    <hr>
    <h3>Navs</h3>
    <hr>
    <div class="example-block">
        <h5>Base nav</h5>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="example-block">
        <h5>Tabs</h5>
        <div class="mb-4">
            <ul class="nav nav-tabs" id="navs-myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="navs-home-tab" data-toggle="tab" href="#navs-home" role="tab"
                       aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navs-profile-tab" data-toggle="tab" href="#navs-profile" role="tab"
                       aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="navs-contact-tab" data-toggle="tab" href="#navs-contact" role="tab"
                       aria-controls="contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="navs-myTabContent">
                <div class="tab-pane fade show active" id="navs-home" role="tabpanel"
                     aria-labelledby="navs-home-tab">Home content
                </div>
                <div class="tab-pane fade" id="navs-profile" role="tabpanel" aria-labelledby="navs-profile-tab">
                    Profile content
                </div>
                <div class="tab-pane fade" id="navs-contact" role="tabpanel" aria-labelledby="navs-contact-tab">
                    Contact content
                </div>
            </div>
        </div>

        <div class="mb-0">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="example-block">
        <h5>Pills</h5>
        <div class="mb-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>

        <div class="mb-0">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="example-block">
        <h5>Fill and justify</h5>
        <div class="mb-0">
            <nav class="nav nav-pills nav-fill">
                <a class="nav-item nav-link active" href="#">Active</a>
                <a class="nav-item nav-link" href="#">Link</a>
                <a class="nav-item nav-link" href="#">Link</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </nav>
        </div>
    </div>
    <div class="example-block">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                   aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui voluptate atque dolore aliquid. Et
                maxime adipisci quia laborum, esse qui reiciendis minima exercitationem quisquam sunt dicta minus
                earum nostrum necessitatibus.
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat provident maxime quasi modi
                perferendis beatae nostrum, repudiandae quis molestiae eveniet! Ipsa corrupti eum quibusdam,
                voluptate ratione quae nihil debitis quasi?
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo provident error necessitatibus
                laudantium facere quia, voluptates cum! Culpa illo optio blanditiis? Totam ad deserunt quisquam est
                rerum dignissimos tempore odit!
            </div>
        </div>
    </div>
    <div class="example-block">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                       role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                       role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                       role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                       role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid id ipsam quasi blanditiis
                        officia recusandae obcaecati, voluptates tenetur dolores saepe tempore, reiciendis nam
                        similique suscipit expedita facilis, cumque rerum! Quos, quas error aliquid impedit soluta
                        illo maiores nisi magni est illum voluptas modi eaque, obcaecati sint similique minus non
                        quae.
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam laudantium deleniti
                        similique, sit hic labore? Consequatur reiciendis accusamus minima aut quod, non quia
                        possimus libero. Quod suscipit ad distinctio enim fuga dolor officia at esse laudantium ut
                        aliquam dolorum laborum veritatis illo natus, quo a incidunt assumenda vel culpa dicta
                        placeat quidem et. Quae, illum. Maiores omnis fugit molestias totam?
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ratione cupiditate iste
                        dolorum cum doloribus voluptatem quo, accusamus corporis iusto magni ipsum. Fugiat possimus
                        autem, nisi nulla suscipit praesentium omnis odit, fugit assumenda inventore exercitationem
                        blanditiis nostrum adipisci alias maiores sed! Similique et iste numquam officia autem
                        alias, ad dolor!
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                         aria-labelledby="v-pills-settings-tab">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum nihil ipsum beatae libero
                        consequuntur, odit tenetur esse quae hic voluptate possimus sapiente quibusdam quo quasi
                        obcaecati dicta debitis omnis molestias veritatis impedit laudantium. Mollitia, facilis
                        corporis eveniet quae quibusdam ratione harum laborum explicabo nobis repudiandae aperiam
                        fugiat expedita eaque minima molestiae dolores atque natus at nemo quo animi neque.
                        Possimus?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
