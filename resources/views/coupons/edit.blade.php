@extends('layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">{{trans('lang.coupon_plural')}}</h3>
    </div>

    <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{trans('lang.dashboard')}}</a></li>
        <li class="breadcrumb-item"><a href="{!! route('coupons') !!}">{{trans('lang.coupon_plural')}}</a></li>
        <li class="breadcrumb-item active">{{trans('lang.coupon_edit')}}</li>
      </ol>
    </div>

  </div>
  <div>

    <div class="card-body">

      <div id="data-table_processing" class="dataTables_processing panel panel-default" style="display: none;">
        {{trans('lang.processing')}}</div>

      <div class="error_top" style="display:none"></div>

      <div class="row vendor_payout_create">

        <div class="vendor_payout_create-inner">

          <!-- <div class="col-md-6"> -->
          <fieldset>
            <legend>{{trans('lang.coupon_edit')}}</legend>

            <div class="form-group row width-50">
              <label class="col-3 control-label">{{trans('lang.coupon_code')}}</label>
              <div class="col-7">
                <input type="text" type="text" class="form-control coupon_code">
                <div class="form-text text-muted">{{ trans("lang.coupon_code_help") }} </div>
              </div>
            </div>

            <div class="form-group row width-50">
              <label class="col-3 control-label">{{trans('lang.coupon_discount_type')}}</label>
              <div class="col-7">
                <select id="coupon_discount_type" class="form-control">
                  <option value="Percentage">{{trans('lang.coupon_percent')}}</option>
                  <option value="Fix Price">{{trans('lang.coupon_fixed')}}</option>
                </select>
                <div class="form-text text-muted">{{ trans("lang.coupon_discount_type_help") }}</div>
              </div>
            </div>

            <div class="form-group row width-50">
              <label class="col-3 control-label">{{trans('lang.coupon_discount')}}</label>
              <div class="col-7">
                <input type="number" type="text" class="form-control coupon_discount">
                <div class="form-text text-muted">{{ trans("lang.coupon_discount_help") }}</div>
              </div>
            </div>

            <div class="form-group row width-50">
              <label class="col-3 control-label">{{trans('lang.coupon_expires_at')}}</label>
              <div class="col-7">
                <!-- <div class="form-group"> -->
                <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control date_picker input-group-addon" />
                  <span class="">
                    <!-- <span class="glyphicon glyphicon-calendar fa fa-calendar"></span> -->
                  </span>
                </div>
                <div class="form-text text-muted">
                  {{ trans("lang.coupon_expires_at_help") }}
                </div>
                <!-- </div> -->
              </div>
            </div>

            <div class="form-group row width-50 d-none">
              <label class="col-3 control-label">{{trans('lang.coupon_vendor_id')}}</label>
              <div class="col-7">
                <select id="vendor_vendor_select" class="form-control">
                  <option value="">{{trans('lang.select_vendor')}}</option>
                </select>
                <div class="form-text text-muted">
                  {{ trans("lang.coupon_vendor_id_help") }}
                </div>
              </div>
            </div>

            <div class="form-group row width-100">
              <label class="col-3 control-label">{{trans('lang.coupon_description')}}</label>
              <div class="col-7">
                <textarea rows="12" class="form-control coupon_description" id="coupon_description"></textarea>
                <div class="form-text text-muted">{{ trans("lang.coupon_description_help") }}</div>
              </div>
            </div>   

            <div class="form-group row width-100">
              <label class="col-3 control-label">{{trans('lang.category_image')}}</label>
              <div class="col-7">
                <input type="file" onChange="handleFileSelect(event)">
                <div class="placeholder_img_thumb coupon_image"></div>
                <div id="uploding_image"></div>
              </div>
            </div>

            <div class="form-group row width-100">
              <div class="form-check">
                <input type="checkbox" class="coupon_enabled" id="coupon_enabled">
                <label class="col-3 control-label" for="coupon_enabled">{{trans('lang.coupon_enabled')}}</label>

              </div>
            </div>
            <div class="form-group row width-100">
              <div class="form-check">
                <input type="checkbox" class="coupon_public" id="coupon_public">
                <label class="col-3 control-label" for="coupon_public">{{trans('lang.coupon_public')}}</label>
              </div>
            </div>
            <!-- </div>

          <div class="col-md-6"> -->

            <!-- <div class="form-group row">
                    <label class="col-3 control-label">{{trans('lang.coupon_item_id')}}</label>
                    <div class="col-7">
                    <select id="coupon_item" class=" select2 form-control" multiple>
                      <option value="">{{trans('lang.select_item')}}</option>
                    </select>
                    <div class="form-text text-muted">
                      {{ trans("lang.coupon_item_id_help") }}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 control-label">{{trans('lang.coupon_vendor_id')}}</label>
                    <div class="col-7">
                    <select id="coupon_vendor" class=" select2 form-control" multiple>
                      <option vale="percent">{{trans('lang.select_vendor')}}</option>
                    </select>
                    <div class="form-text text-muted">
                      {{ trans("lang.coupon_vendor_id_help") }}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 control-label">{{trans('lang.coupon_category_id')}}</label>
                    <div class="col-7">
                    <select id="coupon_category" class="form-control select2" multiple>
                      <option vale="percent">{{trans('lang.select_category')}}</option>
                    </select>
                    <div class="form-text text-muted">
                      {{ trans("lang.coupon_category_id_help") }}
                    </div>
                  </div>
                </div> -->


            <!-- </div> -->
          </fieldset>
        </div>

      </div>

    </div>
    <div class="form-group col-12 text-center btm-btn">
      <button type="button" class="btn btn-primary save_coupon_btn"><i class="fa fa-save"></i> {{
        trans('lang.save')}}</button>
      <a href="{!! route('coupons') !!}" class="btn btn-default"><i class="fa fa-undo"></i>{{ trans('lang.cancel')}}</a>
    </div>

  </div>

  @endsection

  @section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <script>
    var id = "<?php echo $id; ?>";
    var database = firebase.firestore();
    var ref = database.collection('coupons').where("id", "==", id);
    var photo = "";
    var fileName = "";
    var oldImageFile = "";
    var placeholderImage = '';
    var placeholder = database.collection('settings').doc('placeHolderImage');
    var storage = firebase.storage();
    var storageRef = firebase.storage().ref('images');

    placeholder.get().then(async function (snapshotsimage) {
      var placeholderImageData = snapshotsimage.data();
      placeholderImage = placeholderImageData.image;
    })

    $(document).ready(function () {

      $(function () {
        $('#datetimepicker1').datepicker({
          dateFormat: 'mm/dd/yyyy'
        });
      });


      jQuery("#data-table_processing").show();
      ref.get().then(async function (snapshots) {
        var coupon = snapshots.docs[0].data();

        await database.collection('vendors').get().then(async function (snapshots) {

          snapshots.docs.forEach((listval) => {
            var data = listval.data();
            if (data.id == coupon.vendorID) {
              $('#vendor_vendor_select').append($("<option selected></option>")
                .attr("value", data.id)
                .text(data.title));
            } else {
              $('#vendor_vendor_select').append($("<option></option>")
                .attr("value", data.id)
                .text(data.title));
            }
          })
        });

        photo = coupon.image;
        if (photo != '' && photo != null) {
          if (coupon.image) {
            photo = coupon.image;
            oldImageFile = coupon.image;;
          } else {
            photo = placeholderImage;
          }
          $(".coupon_image").append('<img class="rounded" style="width:50px" src="' + photo + '" onerror="this.onerror=null;this.src=\'' + placeholderImage + '\'" alt="image">');
        } else {

          $(".coupon_image").append('<img class="rounded" style="width:50px" src="' + placeholderImage + '" alt="image">');
        }
        $(".coupon_code").val(coupon.code);
        $("#coupon_discount_type").val(coupon.discountType);
        $(".coupon_discount").val(parseInt(coupon.discount));
        $(".coupon_description").val(coupon.description);

        if (coupon.isEnabled) {
          $(".coupon_enabled").prop("checked", true);
        }

        if (coupon.isPublic) {
          $(".coupon_public").prop("checked", true);
        }


        if (coupon.hasOwnProperty("expiresAt")) {
          try {
            var date1 = coupon.expiresAt.toDate().toDateString();
            var date = new Date(date1);
            var dd = String(date.getDate()).padStart(2, '0');
            var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = date.getFullYear();
            var expiresDate = mm + '/' + dd + '/' + yyyy;
          }
          catch (err) {

            var date1 = '';
            var date = '';
            var dd = '';
            var mm = '';
            var yyyy = '';
            var expiresDate = '';

          }
          var $datepicker = $('.date_picker');
          $datepicker.datepicker();
          $datepicker.datepicker('setDate', expiresDate);
        }

        var resturant = "<?php echo $id; ?>";

        $("#vendor_vendor_select").change(function () {
          var vendorID = $(this).val();
        });

        jQuery("#data-table_processing").hide();

      })


      $(".save_coupon_btn").click(async function () {

        var code = $(".coupon_code").val();
        var discount = $(".coupon_discount").val();
        var description = $(".coupon_description").val();
        var newdate = new Date($(".date_picker").val());
        var expiresAt = new Date(newdate.setHours(23, 59, 59, 999));
        var isEnabled = $(".coupon_enabled").is(":checked");
        var discountType = $("#coupon_discount_type").val();
        var vendorID = $("#vendor_vendor_select option:selected").val();
        var isPublic = $(".coupon_public").is(":checked");
        var codeAlreadyExist = false;
       
        codeAlreadyExist=await checkCouponsExist(code);
        
              if (code == '') { 
                  $(".error_top").show();  
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.enter_coupon_code_error')}}</p>");
                  window.scrollTo(0, 0);
              } else if (discount == '') {
                  $(".error_top").show();
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.enter_coupon_discount_error')}}</p>");
                  window.scrollTo(0, 0);
              } else if (discountType == '') {
                  $(".error_top").show();
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.select_coupon_discountType_error')}}</p>");
                  window.scrollTo(0, 0);
              } else if (newdate == 'Invalid Date') {
                  $(".error_top").show();
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.select_coupon_expdate_error')}}</p>");
                  window.scrollTo(0, 0);
              }  else if (codeAlreadyExist > 0) {
                  $(".error_top").show();
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.enter_coupon_code_already_exist_error')}}</p>");
                  window.scrollTo(0, 0);
              } else if (discountType == "Percentage" && (discount >= 100 || discount < 0)) {
                  $(".error_top").show();
                  $(".error_top").html("");
                  $(".error_top").append("<p>{{trans('lang.enter_coupon_percentage_discount_error')}}</p>");
                  window.scrollTo(0, 0);
              } else {
                  jQuery("#data-table_processing").show();
                  storeImageData().then(IMG => {
                      database.collection('coupons').doc(id).set({ 'code': code, 'description': description, 'discount': discount, 'expiresAt': expiresAt, 'isEnabled': isEnabled, 'id': id, 'discountType': discountType, 'image': IMG, 'vendorID': vendorID, 'isPublic': isPublic }).then(function (result) {
                          window.location.href = '{{ route("coupons")}}';
                      });
                  }).catch(err => {
                      jQuery("#data-table_processing").hide();
                      $(".error_top").show();
                      $(".error_top").html("");
                      $(".error_top").append("<p>" + err + "</p>");
                      window.scrollTo(0, 0);
                  });
              }
          });

      })

    async function checkCouponsExist(code){
      var count=0;  
      await database.collection('coupons').where('code', '==', code).get().then(async function (snapshot) {
            
        if (!snapshot.empty && snapshot.docs.length > 0) {
                  
                snapshot.docs.forEach(listval => {
                      var data=listval.data();
                      if(data.id!=id){
                        count++;
                      }
                  });
              }
            })
        return count;    
    }

    function handleFileSelect(evt) {
      var f = evt.target.files[0];
      var reader = new FileReader();
      reader.onload = (function (theFile) {
        return function (e) {

          var filePayload = e.target.result;
          var hash = CryptoJS.SHA256(Math.random() + CryptoJS.SHA256(filePayload));
          var val = f.name;
          var ext = val.split('.')[1];
          var fName = val.split('.')[0];
          var docName = val.split('fakepath')[1];
          var filename = (f.name).replace(/C:\\fakepath\\/i, '')
          var timestamp = Number(new Date());
          var filename = filename.split('.')[0] + "_" + timestamp + '.' + ext;
          fileName = filename;
          photo = filePayload;
          $(".coupon_image").empty();
          $(".coupon_image").append('<img class="rounded" style="width:50px" src="' + photo + '" alt="image">');
        };
      })(f);
      reader.readAsDataURL(f);
    }
    async function storeImageData() {
        var newPhoto = '';
        try {
            if (oldImageFile != "" && photo != oldImageFile) {
                var oldImageUrl = await storage.refFromURL(oldImageFile);
                imageBucket = oldImageUrl.bucket;
                var envBucket = "<?php echo env('FIREBASE_STORAGE_BUCKET'); ?>";
            if (imageBucket == envBucket) {
              await oldImageUrl.delete().then(() => {
                console.log("Old file deleted!")
              }).catch((error) => {
                console.log("ERR File delete ===", error);
              });
            } else {
              console.log('Bucket not matched');
            }
          }
          if (photo != oldImageFile) {
            photo = photo.replace(/^data:image\/[a-z]+;base64,/, "")
            var uploadTask = await storageRef.child(fileName).putString(photo, 'base64', { contentType: 'image/jpg' });
            var downloadURL = await uploadTask.ref.getDownloadURL();
            newPhoto = downloadURL;
            photo = downloadURL;

          } else {
            newPhoto = photo;
          }
        } catch (error) {
          console.log("ERR ===", error);
        }
        return newPhoto;
      }

  </script>
  @endsection