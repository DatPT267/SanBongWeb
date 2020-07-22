@extends('layout.index')
@section('content')
<div class="main cre">
    <div class="container">
        <div class="list-mn over">
            <ul class="ul">
                <li><a href="">Trang chủ</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <li class="active"><a> Tìm đối</a></li>
            </ul>
        </div>
        <div class="row row-s">
            <div class="col-xs-12 col-sm-3 col-s">
                <div class="sidebar-filter-container list-menu over">
    <div class="sidebar sidebar-tien-ich sidebar-province">
        
           
        <ul class="ul list-left-links list-left-check">
            
            <li> <strong><i class="fa fa-map-marker" aria-hidden="true"></i>Tỉnh/Thành phố</strong> </li>
        </ul>
        
        <ul class="ul list-left-links" style="padding-left: 15px;margin-bottom: 10px">
            <li>
                <a href="#" style="color: #333">Hà Nội <span></span></a>
            </li>
        </ul>
    </div>
    <div class="sidebar sidebar-tim-doi ">
        <ul class="ul list-left-links list-left-check">
            <li>
                <strong>Quận/Huyện</strong>
                <ul class="ul" style="padding-left: 15px" id="districtView">
                            <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="4"><input type="hidden" value="false"> Ba Đ&#236;nh
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="15"><input type="hidden" value="false"> Bắc Từ Li&#234;m
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="2"><input type="hidden" value="false"> Cầu Giấy
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="1"><input type="hidden" value="false"> Đống Đa
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="16"><input type="hidden" value="false"> H&#224; Đ&#244;ng
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="5"><input type="hidden" value="false"> Hai B&#224; Trưng
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="3"><input type="hidden" value="false"> Ho&#224;n Kiếm
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="8"><input type="hidden" value="false"> Ho&#224;ng Mai
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="14"><input type="hidden" value="false"> Nam Từ Li&#234;m
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
        <li class="qhCheck">
            <div class="checkbox">
                <label>
                    <input name="qh" type="checkbox" class="qh" value="6"><input type="hidden" value="false"> Thanh Xu&#226;n
                    <span class="pull-right filter-count"></span>
                </label>
            </div>
        </li>
    <script>
        $(".qhCheck").change(function () {
            var qhs = "";
            $('input.qh:checked').each(function () {
                qhs = qhs + $(this).val() + ',';
            });
            if (qhs != undefined && qhs != '') {
                qhs = qhs.substring(0, qhs.length - 1);              
            }
            window.location.href = updateQueryStringParameter(window.location.href, 'qh', qhs);
        });
    </script>


                </ul>
            </li>
        </ul>
    </div>

    <div class="sidebar sidebar-tim-doi ">
        <ul class="ul list-left-links list-left-check">
            <li>
                <strong>Trình độ</strong>
                <ul class="ul" style="padding-left: 15px">
                    <li class="levelCheck">
                        <div class="checkbox">
                            <label>
                                <input name="level" class="level" type="checkbox" value="1"><input name="fo" type="hidden" value="1"> Rất mềm
                                <span class="pull-right filter-count"></span>
                            </label>
                        </div>
                    </li>
                    <li class="levelCheck">
                        <div class="checkbox">
                            <label>
                                <input name="level" class="level" type="checkbox" value="2"><input name="fo" type="hidden" value="2"> Trung bình
                                <span class="pull-right filter-count"></span>
                            </label>
                        </div>
                    </li>
                    <li class="levelCheck">
                        <div class="checkbox">
                            <label>
                                <input name="level" class="level" type="checkbox" value="3"><input name="fo" type="hidden" value="3"> Trung bình yếu
                                <span class="pull-right filter-count"></span>
                            </label>
                        </div>
                    </li>
                    <li class="levelCheck">
                        <div class="checkbox">
                            <label>
                                <input name="level" class="level" type="checkbox" value="4"><input name="fo" type="hidden" value="4"> Trung bình khá
                                <span class="pull-right filter-count"></span>
                            </label>
                        </div>
                    </li>

                </ul>
            </li>
            <li>
                <div class="clear-check"><a href="/tim-doi"><i class="fa fa-close" aria-hidden="true"></i> Xóa lựa chọn</a></div>
            </li>
        </ul>
    </div>
</div>
<script>
    $(function () {
        $(".levelCheck").change(function () {
            var ids = "";
            $('input.level:checked').each(function () {
                ids = ids + $(this).val() + ',';
            });
            if (ids != undefined && ids != '') {
                ids = ids.substring(0, ids.length - 1);
            }
            window.location.href = updateQueryStringParameter(window.location.href, 'level', ids);
        });

    });
    function replaceParam(urls, param, value) {
        var q = queryString.parse(location.search);
        q[param] = value;
        return u;
    }
</script>
<style>
    .clear-check a {
        padding-left: 20px !important;
    }
</style>
            </div>
            <div class="col-xs-12 col-sm-9 col-s">
                <div class="show-itemx">
                    <h1 id="a" class="title-intent title-pages"><i class="fa fa-futbol-o" aria-hidden="true"></i>Tìm đối đá bóng <span style="float: right"><a href='/quan-ly-tim-doi-thu'> Đăng tin</a></span></h1>
                    <div class="CompetitorViewCss">
                        <form id="searchCompetitorForm" class="search-form ng-pristine ng-valid row row-s">
                            <div class="col-xs-12 col-md-2 nopaddingleft col-s">
                                <select class="form-control select-has-stadium" name="hasstadium">
                                    <option value="0">Tất cả</option>
                                    <option value="2">Nhận đi khách</option>
                                    <option value="1">Có sân nhà</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-md-4 col-s">
                                <div class="row row-s">
                                    <div class="col-xs-12 col-sm-7 col-s">
                                        <input type="text" class="form-control date_choise" placeholder="Ngày" id="date" name="date" value="" />
                                        <i class="fa fa-calendar" aria-hidden="true" style="position: absolute;top: 10px;right: 15px;"></i>
                                        <script type="text/javascript">
                                            var dateToday = new Date();
                                            $('.date_choise').datepicker({
                                                'format': 'dd/mm/yyyy',
                                                'autoclose': true,
                                                'startDate': dateToday
                                            });
                                        </script>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 col-s">
                                        <select class="form-control" id="time" name="time">
                                            <option value="">--Thời gian--</option>
                                            <option value="00:00">00:00</option>
                                            <option value="00:30">00:30</option>
                                            <option value="01:00">01:00</option>
                                            <option value="01:30">01:30</option>
                                            <option value="02:00">02:00</option>
                                            <option value="02:30">02:30</option>
                                            <option value="03:00">03:00</option>
                                            <option value="03:30">03:30</option>
                                            <option value="04:00">04:00</option>
                                            <option value="04:30">04:30</option>
                                            <option value="05:00">05:00</option>
                                            <option value="05:30">05:30</option>
                                            <option value="06:00">06:00</option>
                                            <option value="06:30">06:30</option>
                                            <option value="07:00">07:00</option>
                                            <option value="07:30">07:30</option>
                                            <option value="08:00">08:00</option>
                                            <option value="08:30">08:30</option>
                                            <option value="09:00">09:00</option>
                                            <option value="09:30">09:30</option>
                                            <option value="10:00">10:00</option>
                                            <option value="10:30">10:30</option>
                                            <option value="11:00">11:00</option>
                                            <option value="11:30">11:30</option>
                                            <option value="12:00">12:00</option>
                                            <option value="12:30">12:30</option>
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="16:30">16:30</option>
                                            <option value="17:00">17:00</option>
                                            <option value="17:30">17:30</option>
                                            <option value="18:00">18:00</option>
                                            <option value="18:30">18:30</option>
                                            <option value="19:00">19:00</option>
                                            <option value="19:30">19:30</option>
                                            <option value="20:00">20:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                            <option value="23:00">23:00</option>
                                            <option value="23:30">23:30</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-s">
                                <input type="text" class="form-control" name="keyword" placeholder="Tên sân / đội bóng / khu vực...">
                            </div>
                            <div class="col-xs-12 col-md-2 col-s">
                                <button class="btn bg" type="submit" id="btnSearch" style="height: 34px;padding: 0"><i class="fa fa-search" aria-hidden="true"></i>Tìm</button>
                                
                                
                                
                            </div>
                        </form>
                    </div>
                    <div class="link-w">
                        <a class="dateChoiceCss" href="/tim-doi#date=29/10/2019">Hôm nay <span class="colorCss">(0)</span></a>
                        <a class="dateChoiceCss" href="/tim-doi#date=30/10/2019">Ngày mai <span class="colorCss">(0)</span></a>
                        <a class="dateChoiceCss" href="/tim-doi#date=31/10/2019">31/10/2019 <span class="colorCss">(0)</span></a>
                        <a class="dateChoiceCss" href="/tim-doi#date=01/11/2019">01/11/2019 <span class="colorCss">(0)</span></a>
                        <a class="dateChoiceCss" href="/tim-doi#date=02/11/2019">02/11/2019 <span class="colorCss">(0)</span></a>
                    </div>
                    <style>
                        .link-w a {
                            display: inline-block;
                            color: white;
                            margin-right: 7px;
                            padding-right: 7px;
                            background: #588b40;
                            padding: 3px 10px;
                            border-radius: 5px;
                        }

                            .link-w a:last-child {
                                border: none;
                            }

                        .link-w {
                            margin-top: 12px;
                        }

                            .link-w a:hover {
                                background: #ff9600;
                                color: white;
                            }

                            .link-w a.active {
                                background: #ff9600;
                                color: white;
                            }

                        a.dateChoiceCss span {
                            color: #ff9600 !important;
                        }

                        a.dateChoiceCss.active span {
                            color: #0014ff !important;
                        }

                        a.dateChoiceCss:hover span {
                            color: #0014ff !important;
                        }
                    </style>
                </div>
                <div class="show-itemx">
                    <div class="news-list" id="page-new">

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script>
    $(function () {
        initAjaxLoad("/Ajax/CompetitorView/PartialNews", "#page-new");

    });
    $("#btnSearch").click(function () {
        var form = $("#searchCompetitorForm");
        window.location.href = '#' + getValueFormMutilSelect(form);
        return false;
    });
    $(".dateChoiceCss").click(function () {
        $(".dateChoiceCss").removeClass("active");
        $(this).addClass("active");
    });
</script>

<style>
    .main-content.show-itemx {
        background: none;
        box-shadow: 0px 0px 0px 0px;
        padding: 12px 0;
    }

    .news {
        background: white;
        padding: 12px !important;
        border-radius: 4px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.46);
        margin-bottom: 10px;
        border: none !important;
    }

    .form-control {
        padding: 0 3px;
    }

    body.amp-mode-mouse {
        padding-top: 84px;
    }
</style>
<div class="remodal" data-remodal-id="FindCompetitor" id="FindCompetitor" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="max-width:700px;">
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    <div class="register">
        <form id="competitorNewFrm" action="/Ajax/CompetitorView/ActionCompetitor" method="post">
            <input type="hidden" id="CompetitorId" name="itemId" value="" />
            <h3>Thông tin bắt đối</h3>
            <div class="row row-s">
                <div class=" col-xs-12 form-group">
                    <div class="col-xs-12 col-sm-3 col-s text-left">
                        <span>Họ tên</span>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-s">
                        <input type="text" class="form-control pd-left" id="FullName" name="FullName" />
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <div class="col-xs-12 col-sm-3 col-s text-left">
                        <span>Số điện thoại</span>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-s">
                        <input type="text" class="form-control pd-left" id="Mobile" name="Mobile" />
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <div class="col-xs-12 col-sm-3 col-s text-left">
                        <span>Nội dung</span>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-s">
                        <label id="msgError" class="hidden" style="color: red">Thông tin bắt buộc phải nhập</label>
                        <textarea rows="10" class="form-control pd-left" id="Content" name="Content"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-s">
                    <button type="button" id="btnSend" class="btn bg" style="margin-top: 12px; width: 100px; font-size: 16px; padding: 5px 0; background: #588B40 !important">Gửi đi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(function () {
        var formCompetitorNew = $("#competitorNewFrm");
        $("#btnSend").click(function () {
            debugger;
            if (formCompetitorNew.valid()) {
                formCompetitorNew.submit();
            }
        });
        formCompetitorNew.validate({
            rules: {
                FullName: {
                    required: true
                },
                Mobile: {
                    required: true
                },
                Content: {
                    required: true
                }

            },
            messages: {
                FullName: {
                    required: "Họ tên bắt buộc nhập."
                },
                Mobile: {
                    required: "Điện thoại bắt buộc nhập."
                },
                Content: {
                    required: "Nội dung bắt buộc nhập."
                }
            },
            submitHandler: function () { //onSubmit
                formCompetitorNew.ajaxSubmit({
                    success: function (data) {
                        if (data.Erros) {
                            swal({
                                title: "Thông báo",
                                text: data.Message,
                                type: "error",
                                showConfirmButton: true,
                                animation: false
                            });
                        } else {
                            swal({
                                title: "Thông báo",
                                text: data.Message,
                                type: "success",
                                showConfirmButton: true,
                                animation: false,
                                timer: 2000
                            },
                                function () {
                                    $("#FindCompetitor").remodal().close();

                                });
                        }
                    }
                });
                return false;
            }
        });
    });
</script>
@endsection