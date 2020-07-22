@extends('layout.index')

@section('content')
<script src="http://malsup.github.com/jquery.form.js"></script>
<div class="set slyderDisplay">
    
</div>
<div class="main cre">
    <div class="container">
        <div class="row row-s">
                <div class="col-xs-12 col-sm-2 col-s">
        <div class="list-menu over">
            <h3>Quản lý</h3>
            <ul class="ul feature-news">
                <li><a href="/profile-customer" title="Thông tin tài khoản" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Thông tin tài khoản</a></li>
                <li><a href="/quan-ly-tim-doi-thu" title="Tìm đối thủ" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Tìm đối thủ</a></li>
                <li><a href="/hop-thu-den" title="Tin nhắn" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Tin nhắn</a></li>
            </ul>
        </div>
    </div>

            <div class="col-xs-12 col-sm-10 col-s">
                <div class="main-content show-itemx">
                    <h1>Quản lý tìm đối thủ</h1>
                    <div class="list-order" style="margin-bottom: 20px;">
                        <a class="btn btn-social btn-success classAddEdit" id="btn_add">
                            <i class="fa fa-fw fa-plus-square-o"></i> Thêm mới
                        </a>
                    </div>
                    <div id="myModal" class="modalView">

                        <!-- Modal content -->
                        <div class="modalView-contentView">
                            <div id="ViewContent"></div>
                        </div>

                    </div>
                    <div class="list-order" id="ListCompetitor">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        urlFromAddEdit = "/Ajax/CompetitorView/AjaxForm";
        urlAlertAction = "/Ajax/CompetitorView/Action";
        urlList = "/Ajax/CompetitorView/ListItems";
        initAjaxLoad(urlList, "#ListCompetitor");
    });
</script>
<style>
    .modalView {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 100; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    .modalView-contentView {
        background-color: #fefefe;
        margin: 43px auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
    }
    /*
    .clo
@endsection