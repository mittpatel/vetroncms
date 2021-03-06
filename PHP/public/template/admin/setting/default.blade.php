<!doctype html>
<html lang="en-US">
@include('admin/common/head')

<body>

<div class="container">
    <div id="wrapper" class="clearfix">


        @include('admin/common/nav')

        @include('admin/common/header')

        <section id="middle">
            @include('admin/common/crumbs')
            <div id="content" class="padding-20">


                <!-- Panel Tabs Left -->
                <div id="panel-ui-tan-l4" class="panel panel-default">

                    <div class="panel-heading">

                        <!-- tabs nav -->
                        <ul class="nav nav-tabs pull-left">
                            <li class="active"><!-- TAB 1 -->
                                <a href="#ttab1l_nobg" data-toggle="tab"
                                   aria-expanded="false">{{admin_language('setting_basic')}}</a>
                            </li>
                            <li class=""><!-- TAB 2 -->
                                <a href="#ttab2l_nobg" data-toggle="tab"
                                   aria-expanded="true">{{admin_language('setting_mailConfiguration')}}</a>
                            </li>
                            <li class=""><!-- TAB 3 -->
                                <a href="#ttab5l_nobg" data-toggle="tab"
                                   aria-expanded="false">{{admin_language('setting_ourInformation')}}</a>
                            </li>
                            <li class=""><!-- TAB 3 -->
                                <a href="#ttab6l_nobg" data-toggle="tab"
                                   aria-expanded="false">{{admin_language('setting_seo_config')}}</a>
                            </li>
                        </ul>
                        <!-- /tabs nav -->
                    </div>

                    <!-- panel content -->
                    <div class="panel-body panel-body-my" id="" style="display:block !important;">
                        <!-- tabs content -->
                        <div class="tab-content transparent ">
                            <!-- TAB 1 -->
                            <div id="ttab1l_nobg" class="tab-pane active">
                                <form id="d">
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_siteName')}}</label>
                                                    <input type="text" name="home_Name"
                                                           value="{{config('aSetting.home_Name')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_backgroundName')}}</label>
                                                    <input type="text" name="admin_Name"
                                                           value="{{config('aSetting.admin_Name')}}"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div style="display: flex;justify-content: space-between;align-items: flex-end">
                                                        <label>
                                                            Logo
                                                        </label>
                                                        <label>
                                                            <img id="logoID" style="height: 50px;margin-bottom: 10px;"
                                                                 src="{{asset(config('aSetting.home_Logo'))}}">
                                                        </label>
                                                    </div>

                                                    <div class="fancy-file-upload fancy-file-primary">
                                                        <i class="fa fa-upload"></i>
                                                        <input type="file" class="form-control" name="logo[]"
                                                               id="logologo"
                                                               onchange="jQuery(this).next('input').val(this.value);ajaxUploadHeader(this)">
                                                        <input type="text" class="form-control"
                                                               placeholder="no file selected" readonly="">
                                                        <span class="button">{{admin_language('setting_selectFile')}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="display: flex;justify-content: space-between;align-items: flex-end">
                                                        <label>
                                                            Icon
                                                        </label>
                                                        <img id="iconID" style="height: 50px;margin-bottom: 10px;"
                                                             src="{{asset(config('aSetting.home_Icon'))}}">
                                                    </div>


                                                    <div class="fancy-file-upload fancy-file-primary">
                                                        <i class="fa fa-upload"></i>
                                                        <input type="file" class="form-control" name="icon[]"
                                                               id="iconicon"
                                                               onchange="jQuery(this).next('input').val(this.value);ajaxUploadHeader(this)">
                                                        <input type="text" class="form-control"
                                                               placeholder="no file selected" readonly="">
                                                        <span class="button">{{admin_language('setting_selectFile')}}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_RoutingMode')}}</label>
                                                    <br>
                                                    <label class="radio">
                                                        <input @if(config('aSetting.home_RouteModel')==1) checked
                                                               @endif type="radio" name="home_RouteModel" value="1">
                                                        <i></i>details/id
                                                    </label>
                                                    <label class="radio">
                                                        <input @if(config('aSetting.home_RouteModel')==2) checked
                                                               @endif type="radio" name="home_RouteModel" value="2">
                                                        <i></i> details/2017-08-10/id
                                                    </label>
                                                    <label class="radio">
                                                        <input @if(config('aSetting.home_RouteModel')==3) checked
                                                               @endif type="radio" name="home_RouteModel" value="3">
                                                        <i></i> details/2017/08/10/id
                                                    </label>
                                                    <label class="radio">
                                                        <input @if(config('aSetting.home_RouteModel')==4) checked
                                                               @endif type="radio" name="home_RouteModel" value="4">
                                                        <i></i> details?title=ArticleTitle
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="button" value="{{admin_language('common_submit')}}"
                                                           onclick="setDefault('d');"
                                                           class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    {{csrf_field()}}
                                    <input type="hidden" id="hiddenLogo"
                                           value="{{config('aSetting.home_Logo')}}"
                                           name="home_Logo">
                                    <input type="hidden" id="hiddenIcon"
                                           value="{{config('aSetting.home_Icon')}}"
                                           name="home_Icon">
                                </form>

                            </div>
                            <!-- TAB 2 -->
                            <div id="ttab2l_nobg" class="tab-pane">
                                <form id="e">
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_serverType')}}</label>
                                                    <input type="text" name="admin_MailDriver"
                                                           value="{{config('aSetting.admin_MailDriver')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_serverAddress')}}</label>
                                                    <input type="text" name="admin_MailHost"
                                                           value="{{config('aSetting.admin_MailHost')}}"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_port')}}</label>
                                                    <input type="text" name="admin_MailPort"
                                                           value="{{config('aSetting.admin_MailPort')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_encryptionType')}}</label>
                                                    <select name="admin_MailEncryption"
                                                            class="form-control pointer required">
                                                        <option value="">--- Select ---</option>
                                                        <option @if(config('aSetting.admin_MailEncryption')=='tls') selected
                                                                @endif value="tls">tls
                                                        </option>
                                                        <option @if(config('aSetting.admin_MailEncryption')=='ssl') selected
                                                                @endif value="ssl">ssl
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_sendTheName')}}</label>
                                                    <input type="text" name="admin_MailSendName"
                                                           value="{{config('aSetting.admin_MailSendName')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_sendEmailAddress')}}</label>
                                                    <input type="text" name="admin_MailSendAddress"
                                                           value="{{config('aSetting.admin_MailSendAddress')}}"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_emailAddress')}}</label>
                                                    <input type="text" name="admin_MailUsername"
                                                           value="{{config('aSetting.admin_MailUsername')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_emailPassword')}}</label>
                                                    <input type="text" name="admin_MailUserPassword"
                                                           value="{{config('aSetting.admin_MailUserPassword')}}"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_test')}}</label>
                                                    <input type="text" name="testEmail" class="form-control required">
                                                    <button onclick="sendEmailTest($(this).prev().val())" type="button"
                                                            class="btn btn-primary test_email">{{admin_language('setting_send')}}
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="button" value="{{admin_language('common_submit')}}"
                                                           onclick="setDefault('e')"
                                                           class="btn btn-primary">

                                                </div>
                                            </div>
                                        </div>
                                        {{csrf_field()}}
                                    </fieldset>

                                </form>
                            </div>

                            <div id="ttab5l_nobg" class="tab-pane">
                                <form id="c">
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('setting_cellphoneNumber')}}</label>
                                                    <input type="text" name="home_ContactPhoneNumber"
                                                           value="{{config('aSetting.home_ContactPhoneNumber')}}"
                                                           class="form-control required">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label>{{admin_language('common_email')}}</label>
                                                    <input type="text" name="home_ContactEmail"
                                                           value="{{config('aSetting.home_ContactEmail')}}"
                                                           class="form-control required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>{{admin_language('setting_contactAddress')}}</label>
                                                    <textarea name="home_ContactAddress" rows="5"
                                                              class="form-control required">{{config('aSetting.home_ContactAddress')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>{{admin_language('setting_description')}}</label>
                                                    <textarea name="home_ContactDescribe" rows="5"
                                                              class="form-control required">{{config('aSetting.home_ContactDescribe')}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="button" onclick="setDefault('c')"
                                                           value="{{admin_language('common_submit')}}"
                                                           class="btn btn-primary">
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    {{csrf_field()}}

                                </form>
                            </div>
                            <div id="ttab6l_nobg" class="tab-pane">
                                <form id="s">
                                    <fieldset>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>{{admin_language('seo_keywords')}}</label>
                                                    <textarea name="home_SEO_Keywords" rows="5"
                                                              class="form-control required">{{config('aSetting.home_SEO_Keywords')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>{{admin_language('seo_description')}}</label>
                                                    <textarea name="home_SEO_Description" rows="5"
                                                              class="form-control required">{{config('aSetting.home_SEO_Description')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <label>{{admin_language('setting_statisticalCode')}}</label>
                                                    <textarea type="text" name="home_StatisticalCode" rows="5"
                                                              class="form-control required">{{config('aSetting.home_StatisticalCode')}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <input type="button" onclick="setDefault('s')"
                                                           value="{{admin_language('common_submit')}}"
                                                           class="btn btn-primary">
                                                    <button style="margin-left: 10px;" type="button" onclick="window.history.go(-1);" class="btn btn-success">
                                                        {{admin_language('common_Return')}}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                    {{csrf_field()}}

                                </form>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

            @include('admin/common/footer')
        </section>

    </div>
</div>

@include('admin/common/js')
<script>
    function ajaxUploadHeader(e) {
        var ajaxHeader = layer.load();
        ajaxUpload({
            e: e,
            url: "{{url('admin/ajaxUploadLogoIcon')}}",//处理图片脚本
            token: "{{csrf_token()}}"
        }, function (data) {
            layer.close(ajaxHeader);
            if (data.status == 1) {
                if (data.t == 1) {
                    $("#logoID").prop('src', data.url);
                    $("#hiddenLogo").val(data.path);
                } else {
                    $("#iconID").prop('src', data.url);
                    $("#hiddenIcon").val(data.path);
                }
            } else {
                layer.msg(data.msg);
            }
        });
    };

    //    修改基本设置
    function setDefault(e) {
        var ajaxHeader = layer.load();
        $.ajax({
            type: 'POST',
            url: "{{url('admin/setting/default')}}",
            data: $('#' + e).serialize(),
            success: function (data) {
                data = $.parseJSON(data);
                layer.msg(data.msg);
                layer.close(ajaxHeader);
            }
        });
    };

    function sendEmailTest(email) {
        var sendEmailTestS = layer.load();
//        setting/sendEmailTest
        $.ajax({
            type: 'get',
            url: "{{url('admin/setting/sendEmailTest')}}",
            data: {email: email},
            success: function (data) {
                data = $.parseJSON(data);
                layer.close(sendEmailTestS);
                layer.msg(data.msg);
            },
            error: function () {
                layer.close(sendEmailTestS);
                layer.msg("{{admin_language('setting_error')}}");
            }
        });
    }

</script>
</body>
</html>