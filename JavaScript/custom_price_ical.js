
                if(!jQuery.isEmptyObject(result.different_price_dates)){
                  // console.log(result.different_price_dates);
                  var output = '';
                  for (var ical_date in result.different_price_dates) {
                     // output +=  "<tr><td>"+"{{ $result->property_price->currency->symbol }}"+" <span>"+result.different_price_dates[ical_date]+"</span> x <span> 1 </span> "+ "{{trans('messages.property_single.night')}}" + "<span class='fa fa-info-circle' style='color:#0DB37C' data-toggle='tooltip' data-placement='top' title='"+ ical_date +" ></span></td><td>"+"{{ $result->property_price->currency->symbol }}"+"<span>"+result.different_price_dates[ical_date]+"</span></td> </tr>";
                     // output += "<span class='fa fa-info-circle' style='color:#0DB37C' data-toggle='tooltip' data-placement='top' title='"+ ical_date +" ></span></td><td>"+"{{ $result->property_price->currency->symbol }}"+"<span>"+result.different_price_dates[ical_date]+"</span>";

                    console.log(result.different_price_dates[ical_date]);
                   
                    // console.log(output);
                  }
                  $("#custom_price").attr("title", result.different_price_dates[ical_date]);

                  $('[data-toggle="tooltip"]').tooltip();   

                  // $('#custom_price').append(output);
                  // $('#booking_table > tbody > tr').eq(0).after(output);
                }else{
                  console.log('false');
                  $('#custom_price').hide();
                }