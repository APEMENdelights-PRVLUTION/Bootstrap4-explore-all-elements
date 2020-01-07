<div id="input-group">
    <hr>
    <h3>Input Group</h3>
    <hr>
    <div class="example-block">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username"
                   aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
        </div>
        <label for="basic-url">Your vanity URL</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">First and last name</span>
            </div>
            <input type="text" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
                <span class="input-group-text">0.00</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">With textarea</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
                   aria-describedby="inputGroup-sizing-lg">
        </div>

        <!-- Button addons -->
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-danger" type="button">Hate it</button>
                    </div>
                    <input type="text" class="form-control" placeholder="Product name" aria-label="Product name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button">Love it</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend" id="button-addon3">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                    <input type="text" class="form-control" placeholder=""
                           aria-label="Example text with two button addons" aria-describedby="button-addon3">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username with two button addons"
                           aria-describedby="button-addon4">
                    <div class="input-group-append" id="button-addon4">
                        <button class="btn btn-outline-info" type="button">Button</button>
                        <button class="btn btn-outline-info" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons with dropdowns -->
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segmented buttons -->
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button"
                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-secondary">Action</button>
                        <button type="button"
                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom select -->
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button">Button</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03"
                            aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04"
                            aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom file input -->
        <div class="row mb-3">
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                               aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile03"
                               aria-describedby="inputGroupFileAddon03">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                               aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

