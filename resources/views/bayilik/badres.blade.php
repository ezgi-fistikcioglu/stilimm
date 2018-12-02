@extends('layouts.master2')
@section('title','Bayilik Adresi')
@section('content')
    <div class="header-banner-cover">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Adresim</b></div>
                    <div class="panel-body">
                        <div class="rightColumn">

                            <div class="customFieldSetContainer newDesignForm">
                                <span class="legend"><b>Yeni Adres Ekle</b></span>
                                <form action="https://www.n11.com/hesabim/teslimat-adresi/kaydet" method="post" class="well form-horizontal" id="addressForm">
                                    <p class="warningContent isWarning " style="display: none;">Siparişinizin doğru adrese teslim edilmesi için lütfen işaretli alanlardaki bilgileri doğrulayın.</p>
                                    <p class="warningContent isError " style="display: block;">Siparişinizin doğru adrese teslim edilmesi için lütfen aşağıdaki eksik bilgileri girin.</p>

                                    <div class="fieldsetContainer addNewAddressFieldSet addressItem">
                                        <input id="id" name="id" type="hidden" value="">
                                        <div class="fieldset">
                                            <div class="formfield  error">
                                                <div>
                                                    <label for="title">
                                                        Adres Başlığı <span class="required">*</span>
                                                    </label>
                                                    <input id="title" name="title" type="text" value="" data-validation="required maxlength" data-required-message="Lütfen adres başlığı girin." data-maxlength="255" maxlength="255" class="val-error">
                                                </div>
                                                <div class="errorMessage" data-errormessagefor="title">
                                                    <div class="errorText">Lütfen adres başlığı girin.</div>
                                                </div>
                                            </div>
                                            <div class="formfield ">
                                                <div>
                                                    <label for="fullName">
                                                        Adı Soyadı
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input id="fullName" name="fullName" type="text" value="" data-validation="required maxlength fullnamecheck" data-maxlength="100" maxlength="100" data-required-message="Lütfen ad soyadı girin.">
                                                </div>
                                                <div class="errorMessage" data-errormessagefor="fullName">
                                                    <div class="errorText">

                                                    </div>
                                                </div>

                                            </div>
                                            <input type="hidden" class="module" value="cityDistrict">

                                            <div class="formfield ">
                                                <div>
                                                    <label>Şehir  <span class="required">*</span></label>
                                                    <select id="cityId" name="cityId" class="cityId" data-update-element="districtId" data-validation="required" data-required-message="Lütfen şehir seçin.">
                                                        <option value="">Seçin</option>

                                                        <option value="2501">Adana</option>

                                                        <option value="2502">Adıyaman</option>

                                                        <option value="2503">Afyon</option>

                                                        <option value="2504">Ağrı</option>

                                                        <option value="2568">Aksaray</option>

                                                        <option value="2505">Amasya</option>

                                                        <option value="2506">Ankara</option>

                                                        <option value="2507">Antalya</option>

                                                        <option value="2575">Ardahan</option>

                                                        <option value="2508">Artvin</option>

                                                        <option value="2509">Aydın</option>

                                                        <option value="2510">Balıkesir</option>

                                                        <option value="2574">Bartın</option>

                                                        <option value="2572">Batman</option>

                                                        <option value="2569">Bayburt</option>

                                                        <option value="2511">Bilecik</option>

                                                        <option value="2512">Bingöl</option>

                                                        <option value="2513">Bitlis</option>

                                                        <option value="2514">Bolu</option>

                                                        <option value="2515">Burdur</option>

                                                        <option value="2516">Bursa</option>

                                                        <option value="2517">Çanakkale</option>

                                                        <option value="2518">Çankırı</option>

                                                        <option value="2519">Çorum</option>

                                                        <option value="2520">Denizli</option>

                                                        <option value="2521">Diyarbakır</option>

                                                        <option value="2581">Düzce</option>

                                                        <option value="2522">Edirne</option>

                                                        <option value="2523">Elazığ</option>

                                                        <option value="2524">Erzincan</option>

                                                        <option value="2525">Erzurum</option>

                                                        <option value="2526">Eskişehir</option>

                                                        <option value="2527">Gaziantep</option>

                                                        <option value="2528">Giresun</option>

                                                        <option value="2529">Gümüşhane</option>

                                                        <option value="2530">Hakkari</option>

                                                        <option value="2531">Hatay</option>

                                                        <option value="2576">Iğdır</option>

                                                        <option value="2532">Isparta</option>

                                                        <option value="2534">İstanbul</option>

                                                        <option value="2535">İzmir</option>

                                                        <option value="2546">K.Maraş</option>

                                                        <option value="2578">Karabük</option>

                                                        <option value="2570">Karaman</option>

                                                        <option value="2536">Kars</option>

                                                        <option value="2537">Kastamonu</option>

                                                        <option value="2538">Kayseri</option>

                                                        <option value="2601">Kıbrıs</option>

                                                        <option value="2579">Kilis</option>

                                                        <option value="2571">Kırıkkale</option>

                                                        <option value="2539">Kırklareli</option>

                                                        <option value="2540">Kırşehir</option>

                                                        <option value="2541">Kocaeli</option>

                                                        <option value="2542">Konya</option>

                                                        <option value="2543">Kütahya</option>

                                                        <option value="2544">Malatya</option>

                                                        <option value="2545">Manisa</option>

                                                        <option value="2547">Mardin</option>

                                                        <option value="2533">Mersin</option>

                                                        <option value="2548">Muğla</option>

                                                        <option value="2549">Muş</option>

                                                        <option value="2550">Nevşehir</option>

                                                        <option value="2551">Niğde</option>

                                                        <option value="2552">Ordu</option>

                                                        <option value="2580">Osmaniye</option>

                                                        <option value="2553">Rize</option>

                                                        <option value="2554">Sakarya</option>

                                                        <option value="2555">Samsun</option>

                                                        <option value="2563">Şanlıurfa</option>

                                                        <option value="2556">Siirt</option>

                                                        <option value="2557">Sinop</option>

                                                        <option value="2573">Şırnak</option>

                                                        <option value="2558">Sivas</option>

                                                        <option value="2559">Tekirdağ</option>

                                                        <option value="2560">Tokat</option>

                                                        <option value="2561">Trabzon</option>

                                                        <option value="2562">Tunceli</option>

                                                        <option value="2564">Uşak</option>

                                                        <option value="2565">Van</option>

                                                        <option value="2577">Yalova</option>

                                                        <option value="2566">Yozgat</option>

                                                        <option value="2567">Zonguldak</option>
                                                    </select>
                                                </div>

                                                <div class="errorMessage" data-errormessagefor="cityId">
                                                    <div class="errorText">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formfield ">
                                                <div>
                                                    <label>İlçe  <span class="required">*</span></label>
                                                    <select id="districtId" name="districtId" class="districtId" data-update-element="neighbourhoodId" data-validation="required" data-required-message="Lütfen ilçe seçin.">
                                                        <option value="">Seçin</option>
                                                    </select>
                                                </div>

                                                <div class="errorMessage" data-errormessagefor="districtId">
                                                    <div class="errorText">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="formfield  ">
                                                <div>
                                                    <label>Mahalle / Köy <span class="required">*</span></label>
                                                    <select id="neighbourhoodId" name="neighborhoodId" class="neighbourhoodId" data-validation="required" data-required-message="Lütfen mahalle seçiniz.">
                                                        <option value="">Seçin</option>
                                                    </select>
                                                </div>

                                                <div class="errorMessage" data-errormessagefor="neighbourhoodId">
                                                    <div class="errorText"></div>
                                                </div>
                                            </div>


                                            <div class="formfield ">
                                                <div>
                                                    <label for="address">
                                                        Adres <span class="required">*</span>
                                                    </label>
                                                    <textarea rows="5" cols="100" id="address" name="address" data-validation="required maxlength minlength" data-maxlength="99" data-minlength="10" data-required-message="Lütfen adres girin."></textarea>
                                                    <span class="txtCounter">99</span>
                                                </div>
                                                <div class="errorMessage" data-errormessagefor="address">
                                                    <div class="errorText">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fieldset">
                                            <div class="formfield ">
                                                <div>
                                                    <label for="postalcode">
                                                        Posta Kodu
                                                    </label>
                                                    <input id="postalcode" class="postCode" name="postalcode" type="text" value="" data-validation="maxlength" data-maxlength="5" maxlength="5">
                                                </div>
                                                <div class="errorMessage" data-errormessagefor="postalcode">
                                                    <div class="errorText">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formfield ">
                                                <div>
                                                    <label for="gsm">
                                                        Cep Telefonu <span class="required">*</span>
                                                    </label>
                                                    <input id="gsm" name="gsm" type="text" value="" class="phone" data-validation="required" data-required-message="Lütfen cep telefonu numarası girin.">
                                                </div>
                                                <div class="errorMessage" data-errormessagefor="gsm">
                                                    <div class="errorText">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formfield">
                                                <div>
                                                    <label>Fatura Türü</label>
                                                    <label for="individual" class="radio">
                                                        <input type="radio" name="invoiceType" class="invoiceTypeItem individual" value="INDIVIDUAL" checked="checked"> Bireysel
                                                    </label>
                                                    <label for="company" class="radio">
                                                        <input type="radio" name="invoiceType" class="invoiceTypeItem corporate" value="CORPARATE"> Kurumsal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="billingTypeContainer validation INDIVIDUAL" style="display: block;">
                                                <div class="formfield ">
                                                    <div class="billingTcNumberContainer">
                                                        <label for="shipping_tcId">
                                                            TC Kimlik No <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="tcId" id="shipping_tcId" autocomplete="off" name="tcId" value="" data-validation="required ssn" cached-validation="required ssn" data-maxlength="11" maxlength="11">
                                                    </div>
                                                    <div class="errorMessage" data-errormessagefor="shipping_tcId">
                                                        <div class="errorText"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billingTypeContainer validation CORPARATE" style="display: none;">
                                                <div class="formfield">
                                                    <div>
                                                        <label for="shipping_companyName">
                                                            Firma Adı <span class="required">*</span>
                                                        </label>
                                                        <input type="text" name="companyName" class="companyName" id="shipping_companyName" value="" cached-validation="required maxlength" data-validation="required maxlength" data-maxlength="255" maxlength="255" disabled="disabled">
                                                    </div>
                                                    <div class="errorMessage" data-errormessagefor="shipping_companyName">
                                                        <div class="errorText"></div>
                                                    </div>
                                                </div>
                                                <div class="formfield">
                                                    <div>
                                                        <label for="shipping_taxId">
                                                            Vergi Numarası <span class="required">*</span>
                                                        </label>
                                                        <input type="text" name="taxId" id="shipping_taxId" class="taxId" value="" cached-validation="required exactlength" data-validation="required exactlength" data-exactlength="10" maxlength="10" disabled="disabled">
                                                    </div>
                                                    <div class="errorMessage" data-errormessagefor="shipping_taxId">
                                                        <div class="errorText"></div>
                                                    </div>
                                                </div>

                                                <div class="formfield">
                                                    <div>
                                                        <label for="shipping_taxHouse_corporate">
                                                            Vergi Dairesi <span class="required taxHouseRequiredMark" style="display: none;">*</span>
                                                        </label>
                                                        <input type="text" name="taxHouse" id="shipping_taxHouse_corporate" class="taxHouse" value="" cached-validation="required maxlength" data-validation="required maxlength" data-maxlength="100" maxlength="100" disabled="disabled">
                                                    </div>
                                                    <div class="errorMessage" data-errormessagefor="shipping_taxHouse_corporate">
                                                        <div class="errorText"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="formfield">
                                                <div class="btnField">
                                                    <label>&nbsp;</label>
                                                    <a href="https://www.n11.com/hesabim/teslimat-adresi" class="btn  btn-warning">
                                                        İptal
                                                    </a>
                                                    <div id="saveButton" class="btn btn-primary">
                                                        Kaydet
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="defaultAddress" name="defaultAddress" value="false">
                                    <input type="hidden" id="token" name="token" value="GQdrVRgykpXDBgDpBofconeFMOuOGD">
                                </form>
                            </div>

                            <input type="hidden" class="module" value="addAddress">
                            <input type="hidden" id="mallFrontRootAddressURL" name="mallFrontRootAddressURL" value="https://www.n11.com/hesabim/teslimat-adresi">


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
