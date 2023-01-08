<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<div id="secondary-bar" data-role="filter-nav-trigger">
    <span class="icon-filter"></span>
    <span class="info d-block d-lg-none" data-role="filter-count">Filter</span>
</div>
<section id="main">
    <aside>
        <div id="filter" data-role="filter">
            <div id="filter-top">
                <a href="#" data-role="filter-nav-trigger" data-webm-clickvalue="page-filter-cancel">Cancel</a>
                <span>Filter</span>
                <a href="#" data-role="filter-nav-trigger" data-webm-clickvalue="page-filter-done">Done</a>
            </div>
            <div id="filter-content" data-role="filter-content">
                <div data-role="filter-info" data-results-count="0" data-filters-count=""></div>
                <div class="filter-section">
                    <label for="amount">
                        <h4>Sort by</h4>
                    </label>

                    <div class="row">
                        <div class="col-6">
                            <form action="#">
                                @csrf

                                <select name="sort" id="sort" class="form-control">
                                    <option value="">Featured</option>
                                    <option value="">Price (Low to High)</option>
                                    <option value="">Price (High to Low)</option>
                                    <option value="">Make (A-Z)</option>
                                    <option value="">Make (Z-A)</option>
                                </select>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="filter-section clearfix">
                    <div class="heading-summary">
                        <h4>Brand</h4>
                    </div>
                    <div class="items clearfix expanded" data-role="filter-brand">
                        <div>
                            <input type="checkbox" name="Mercedes-Benz" id="Mercedes-Benz">
                            <label>
                                <img src="https://carsales.pxcrush.net/carsales/general/content/aey9o0uktreqjtnbinfkpgdi9.png?watermark=1564220535&amp;width=120&amp;height=120"
                                    alt="Mercedes-Benz" />
                                <span>
                                    Mercedes-Benz
                                </span>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="BMW" id="BMW">
                            <label>
                                <img src="https://carsales.pxcrush.net/carsales/general/content/t06dqdylwi06uzegwt5fsqsj8.png?watermark=2133230603&amp;width=120&amp;height=120"
                                    alt="BMW" />
                                <span>
                                    BMW
                                </span>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="Chevrolet" id="Chevrolet">
                            <label>
                                <img src="https://carsales.pxcrush.net/carsales/general/content/9tf9t2igbjkjxf6xwp5yxf0sc.png?watermark=272871547&amp;width=120&amp;height=120"
                                    alt="Chevrolet" />
                                <span>
                                    Chevrolet
                                </span>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="Ford" id="Ford">
                            <label>
                                <img src="https://carsales.pxcrush.net/carsales/general/content/rxbz6yzvnq4dlqk7u6ylfvme5.png?watermark=620028814&amp;width=120&amp;height=120"
                                    alt="Ford" />
                                <span>
                                    Ford
                                </span>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="Lexus" id="Lexus">
                            <label>
                                <img src="https://carsales.pxcrush.net/carsales/general/content/50q74bbz0b6uwwwki1e57h8xd.png?watermark=917180936&amp;width=120&amp;height=120"
                                    alt="Lexus" />
                                <span>
                                    Lexus
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-section clearfix">
                    <div class="heading-summary">
                        <h4>Model</h4>
                    </div>
                    <div class="items expanded">
                        <div>
                            <input type="checkbox" name="Hatch" id="Hatch">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/ojwat0g2vx3bpj0fxv02w64ub.png?watermark=1344930695&amp;width=120&amp;height=120"
                                    alt="Hatch" />
                                <b>
                                    <i>Hatch</i>
                                </b>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="SUV" id="SUV">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/fuy1a2411y4srrtamrqk1xzqd.png?watermark=1054941123&amp;width=120&amp;height=120"
                                    alt="SUV" />
                                <b>
                                    <i>SUV</i>
                                </b>
                            </label>

                        </div>
                        <div>
                            <input type="checkbox" name="Sedan" id="Sedan">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/p1csvjhw7fxqwtxr8me4n6466.png?watermark=1404171455&amp;width=120&amp;height=120"
                                    alt="Sedan" />

                                <b>
                                    <i>Sedan</i>
                                </b>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="Convertible" id="Convertible">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/57huwp5bjwiztj11f22n1xpd5.png?watermark=1288699950&amp;width=120&amp;height=120"
                                    alt="Convertible" />
                                <b>
                                    <i>Convertible</i>
                                </b>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="Coupe" id="Coupe">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/rz6k55fwr774i4dqighwhme76.png?watermark=1299445749&amp;width=120&amp;height=120"
                                    alt="Coupe" />
                                <b>
                                    <i>Coupe</i>
                                </b>
                            </label>
                        </div>
                        <div>
                            <input type="checkbox" name="PeopleMover" id="PeopleMover">
                            <label for="">
                                <img src="https://carsales.pxcrush.net/carsales/general/content/2ck0eo4hpaqcj0g035a2ird0d.png?watermark=631934532&amp;width=120&amp;height=120"
                                    alt="People Mover" />
                                <b>
                                    <i>People Mover</i>
                                </b>

                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-section">
                    <div class="heading-summary">
                        <label for="amount">
                            <h4>Price</h4>
                        </label>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <form action="">
                                <input type="text" id="amount" readonly
                                    style="border:0; color:#27ae60; font-weight:bold;">
                                <div id="slider-range"></div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="filter-section">
                    <div class="heading-summary">
                        <label for="amount">
                            <h4>Year of Manufacture</h4>
                        </label>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <form action="#">
                                @csrf

                                <select name="year" id="year" class="form-control">
                                    <option value="">2015</option>
                                    <option value="">2016</option>
                                    <option value="">2017</option>
                                    <option value="">2018</option>
                                    <option value="">2019</option>
                                    <option value="">2020</option>
                                    <option value="">2021</option>
                                    <option value="">2022</option>
                                </select>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div id="filter-bottom" data-role="filter-bottom" class="csn-theme">
                <a href="/newcar" class="btn-clear" data-webm-clickvalue="page-filter-clear-all-filters">Clear all
                    filters</a>
                <a href="#" class="btn btn-success"> <strong> Show cars </strong> </a>
            </div>
        </div>
        <div class="bg" data-role="filter-nav-trigger"></div>
    </aside>