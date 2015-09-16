<section class="row" ng-app="ec">
    <div class="col ends-at-two-thirds clr holding-box" ng-controller="detailsCtrl">
        <div class="breather">
            <h1 class="inline">
                {{ data.title }}
            </h1>

            <div class="order-option-wrapper">
                <section class="order-option-main breather">
                    <h2 class="inline">
                        This record is held by Somerset Heritage Centre (South West Heritage Trust)
                    </h2>

                    <div class="order-buttons">
                        <ul>
                            <li>
                                <a href="/details/a/A13532165" class="discoveryPrimaryCallToActionLink" target="_blank"
                                   data-webtrends-call="otherArchive"> See contact details</a>
                            </li>
                        </ul>
                    </div>
                </section>
                <input type="hidden" id="deliveryoption" value="LocalArchive">
                <input type="hidden" id="readertype" value="offsite">
            </div>
            <div class="emphasis-block">
                As a member of Somerset Heritage Centre (South West Heritage) you are able to <a href="#asset"
                                                                                                 ng-click="toggleEditable()">edit
                    this record</a>
            </div>
            <table class="asset-details" id="asset">
                <caption>Details of GRANT-DALTON FAMILY: WILLS &amp; MISC.ITEMS.</caption>


                <tbody>
                <tr>
                    <th scope="row">
                        Title:
                    </th>
                    <td class="itemContent">
                        <p ng-hide="editable">{{ data.title }}</p>
                        <textarea ng-show="editable" rows="1" ng-model="data.title"></textarea>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        Reference:
                    </th>
                    <td>
                        DD\BR\cr/27
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        Description:
                    </th>
                    <td class="itemContent" id="annotationcontentdescription">
                        <p ng-hide="editable">{{ data.description }}</p>
                        <textarea ng-show="editable" ng-model="data.description" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        Date:
                    </th>
                    <td class="itemContent">
                        <p ng-hide="editable">{{ data.date }}</p>
                        <textarea ng-show="editable" rows="1" ng-model="data.date"></textarea>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        Held by:
                    </th>
                    <td>
                        <a href="/details/a/A13532165" target="_blank">Somerset Heritage Centre (South West Heritage
                            Trust)</a>, not available at The National Archives
                    </td>
                </tr>


                <tr>
                    <th scope="row">
                        Language:
                    </th>
                    <td>
                        English
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        Extent:
                    </th>
                    <td>
                        7 docts.
                    </td>
                </tr>


                </tbody>
            </table>
                <span ng-show="editable" class="edit-button-holder"><input type="checkbox" ng-model="editable" id="editmode">
                        <label for="editmode"><span class="discoveryPrimaryCallToActionLink">Save my changes</span></label>
                </span>


            <div id="hierarchy">
                <h3 class="inline">
                    Context of this record
                </h3>
                <ul>
                    <li><a href="/browse/r/A13532165">168 - Somerset Heritage Centre (South West Heritage Trust)</a>
                    </li>
                    <li><a href="/browse/r/fe5746eb-f3a0-44f9-bba8-97e524b0803b">DD\BR\cr - FAMILY PAPERS OF HARRINGTON
                            FAMILY OF KELSTON AND GRANT - DALTON FAMILY OF CUCKLINGTON</a></li>
                    <li><a href="/browse/r/b1375ced-4665-490e-940b-c86cf64040e5">DD\BR\cr/27 - GRANT-DALTON FAMILY:
                            WILLS &amp; MISC.ITEMS.</a></li>
                </ul>
            </div>

            <div id="sharing-btns">
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_facebook at300b" title="Facebook" href="#"><span
                            class="at4-icon-left at4-icon aticon-facebook"
                            style="background-color: rgb(48, 88, 145);"><span
                                class="at_a11y">Share on facebook</span></span></a><a
                        class="addthis_button_twitter at300b" title="Tweet" href="#"><span
                            class="at4-icon-left at4-icon aticon-twitter"
                            style="background-color: rgb(44, 168, 210);"><span
                                class="at_a11y">Share on twitter</span></span></a><a class="addthis_button_email at300b"
                                                                                     target="_blank" title="Email"
                                                                                     href="#"><span
                            class="at4-icon-left at4-icon aticon-email"
                            style="background-color: rgb(115, 138, 141);"><span
                                class="at_a11y">Share on email</span></span></a><a class="addthis_button_compact at300m"
                                                                                   href="#"><span
                            class="at4-icon-left at4-icon aticon-compact"
                            style="background-color: rgb(252, 109, 76);"><span
                                class="at_a11y">More Sharing Services</span></span></a>

                    <div class="atclear"></div>
                </div>
                <p>Sharing will require cookies. <a title="Cookie policy"
                                                    href="http://www.nationalarchives.gov.uk/legal/cookies.htm">Show
                        details</a></p>
                <script type="text/javascript"
                        src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-500565897ff2ca83"></script>
            </div>
        </div>
    </div>

    <div class="col starts-at-full ends-at-one-third clr holding-box">


        <form action="/details/rd/b1375ced-4665-490e-940b-c86cf64040e5/submitcorrection" id="suggest-a-correction-form"
              method="post" novalidate="novalidate"><h2><span><span>Found an error?</span></span></h2>

            <div class="breather">
                <p>If you find an error with this record description <a href="#" id="show-suggestion-form">let us
                        know</a></p>
            </div>
            <div class="breather suggestion-form-wrapper" style="display: none;">
                <p>Fields marked with <span class="indicate-mandatory-form-element">*</span> are mandatory.</p>

                <div class="first-form-field-group">
                    <label for="fieldContainingError">Which field contains the error? <span
                            class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Field" data-valmsg-replace="true"></span>
                    <select data-val="true" data-val-required="This field is required" id="fieldContainingError"
                            name="Field">
                        <option value="">Select from list</option>
                        <option>Access conditions</option>
                        <option>Arrangement</option>
                        <option>Creator</option>
                        <option>Date</option>
                        <option>Description</option>
                        <option>Former references</option>
                        <option>Held by</option>
                        <option>Language</option>
                        <option>Legal status</option>
                        <option>Note</option>
                        <option>Other</option>
                        <option>Physical description</option>
                        <option>Reference</option>
                        <option>Related Material</option>
                        <option>Separated Material</option>
                        <option>Title</option>
                    </select>
                </div>
                <div class="form-field-group">
                    <label for="whatIsTheError">What is the error? <span
                            class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Description"
                          data-valmsg-replace="true"></span>
                    <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters"
                              data-val-length-max="1000" data-val-required="This field is required" id="whatIsTheError"
                              name="Description" rows="2"></textarea>
                </div>
                <div class="form-field-group">
                    <label for="whatIsTheRecommendation">What is the correct information? <span
                            class="indicate-mandatory-form-element">*</span></label>
                    <span class="field-validation-valid" data-valmsg-for="Recommendation"
                          data-valmsg-replace="true"></span>
                    <textarea cols="20" data-val="true" data-val-length="Maximum decription length is 1000 characters"
                              data-val-length-max="1000" data-val-required="This field is required"
                              id="whatIsTheRecommendation" name="Recommendation" rows="2"></textarea>
                </div>
                <div class="form-field-group">
                    <label for="referenceDetails" id="reference-details-label"> Have you seen this error elsewhere?
                        Please provide reference details</label>
                    <textarea cols="20" id="referenceDetails" name="ReferenceDetails" rows="2"></textarea>
                </div>
            </div>
            <div class="breather suggestion-form-wrapper" style="display: none;">
                <h3 class="inline">Your details</h3>

                <div class="form-field-group">
                    <p>
                        If you provide your details, we will contact you within 10 working days if we cannot act on your
                        suggestion
                    </p>

                    <div class="small-spacer-below">
                        <label for="userName" id="username-label">
                            Name
                        </label>
                        <input id="userName" name="UserName" type="text" value="">
                    </div>
                    <div class="small-spacer-below">
                        <label for="userEmail" id="email-address-label">
                            Email address
                        </label>
                        <input id="userEmail" name="UserEmail" type="text" value="">
                    </div>
                </div>
                <div class="last-form-field-group">
                    <input class="discoverySecondaryCallToActionLink" type="submit" value="Submit"
                           onclick="dcsMultiTrack('DCS.dcsuri','/AssetDetails/SubmitaCorrection','WT.ti','Submit a Correction','WT.cg_n','Submit Correction','WT.dl','0','DCSext.prodpgtype','','DCSext.prodpgaction','');">
                </div>
            </div>
            <input id="Hash" name="Hash" type="hidden" value=""></form>
    </div>
</section>