<?php

/*
 * Project: CleanWebfront
 * File: statusModule.php
 * Author: Alex Kersten
 * 
 * The status module is the default module that users will see on the main page
 * of the Webfront. It will contain sensor information and jet activity
 * indicators and server status indicators.
 */

class statusModule extends module {

    function __construct() {
        parent::__construct("Status");
    }

    function getInnerContent() {
        return
                '<h2>Welcome To Our World!</h2>
                    <p>This is the status page, where all relevant live statistics
           of the fountain and related software will be represented. These
           statistics are refreshed in real-time as the server finds out about
           changes, so what you\'re seeing here is a true reflection of the
           state of things, as far as the Webfront is concerned. Not to say that
           things couldn\'t seem fine here yet still be broken, though.</p>
           <div class="well">
            <dl class="dl-horizontal">
                <dt>Server State</dt>
                <dd>
                    <span class="label label-inverse" data-bind="text: fountainState"></span>
                </dd>
            </dl>
            
            <div style="position: relative; height: 256px; width: 768px; margin-left:auto; margin-right: auto;">
            <!-- Fountain status display (not proud of the hacky bitmasking but it works) -->
            <span class="label" style="position: absolute; left: 365px; top: 14px;" data-bind="css: {\'label-info\': valveState() & 1}">V1</span>
            <span class="label" style="position: absolute; left: 346px; top: 31px;" data-bind="css: {\'label-info\': valveState() & 2}">V2</span>
            <span class="label" style="position: absolute; left: 333px; top: 50px;" data-bind="css: {\'label-info\': valveState() & 4}">V3</span>
            <span class="label" style="position: absolute; left: 323px; top: 70px;" data-bind="css: {\'label-info\': valveState() & 8}">V4</span>
            <span class="label" style="position: absolute; left: 317px; top: 90px;" data-bind="css: {\'label-info\': valveState() & 16}">V5</span>
            <span class="label" style="position: absolute; left: 317px; top: 110px;" data-bind="css: {\'label-info\': valveState() & 32}">V6</span>
            <span class="label" style="position: absolute; left: 323px; top: 130px;" data-bind="css: {\'label-info\': valveState() & 64}">V7</span>
            <span class="label" style="position: absolute; left: 333px; top: 150px;" data-bind="css: {\'label-info\': valveState() & 128}">V8</span>
            <span class="label" style="position: absolute; left: 346px; top: 169px;" data-bind="css: {\'label-info\': valveState() & 256}">V9</span>
            <span class="label" style="position: absolute; left: 363px; top: 186px;" data-bind="css: {\'label-info\': valveState() & 512}">V10</span>

            <span class="label" style="position: absolute; left: 385px; top: 150px;" data-bind="css: {\'label-info\': valveState() & 1024}">VC</span>
            <span class="label" style="position: absolute; left: 380px; top: 168px;" data-bind="css: {\'label-info\': valveState() & 2048}">VR</span>

            <span class="label" style="position: absolute; left: 420px; top: 35px;" data-bind="css: {\'label-info\': valveState() & 4096}">H1</span>
            <span class="label" style="position: absolute; left: 445px; top: 40px;" data-bind="css: {\'label-info\': valveState() & 8192}">H2</span>
            <span class="label" style="position: absolute; left: 468px; top: 50px;" data-bind="css: {\'label-info\': valveState() & 16384}">H3</span>
            <span class="label" style="position: absolute; left: 483px; top: 67px;" data-bind="css: {\'label-info\': valveState() & 32768}">H4</span>
            <span class="label" style="position: absolute; left: 490px; top: 85px;" data-bind="css: {\'label-info\': valveState() & 65536}">H5</span>
            <span class="label" style="position: absolute; left: 485px; top: 103px;" data-bind="css: {\'label-info\': valveState() & 131072}">H6</span>
            <span class="label" style="position: absolute; left: 478px; top: 121px;" data-bind="css: {\'label-info\': valveState() & 262144}">H7</span>
            <span class="label" style="position: absolute; left: 468px; top: 138px;" data-bind="css: {\'label-info\': valveState() & 524288}">H8</span>
            <span class="label" style="position: absolute; left: 454px; top: 155px;" data-bind="css: {\'label-info\': valveState() & 1048576}">H9</span>
            <span class="label" style="position: absolute; left: 437px; top: 173px;" data-bind="css: {\'label-info\': valveState() & 2097152}">H10</span>
            
            <span class="label" style="position: absolute; left: 430px; top: 138px;" data-bind="css: {\'label-info\': valveState() & 4194304}">HC</span>
            <span class="label" style="position: absolute; left: 430px; top: 155px;" data-bind="css: {\'label-info\': valveState() & 8388608}">HR</span>
    
            </div>
          </div>
';
    }

}

?>
