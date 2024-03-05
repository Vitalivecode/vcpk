// $(document).ready(function () {
//     $("#resultBlock").hide();
//     $("#errorBlock").hide();
// });
 
// $(document).on("click", "#submit", function () {
//     $("#resultBlock").hide();
//     $("#errorBlock").hide();
 
//     // var apiKey = $("#apiKey").val().trim(); //Get your API key by registering at https://bytescout.com/
//     var apiKey = 'rudra.pranay@gmail.com_43P6fCvg7WSqYIa2fg4NQZJdHf0cb6qBg00IbVha3TtF0rTVn3DQ68L8y79n6s85O6TR035Lg461FYr93cHgE962rRlBSknHANM8479vE3a31XxyNXe587XsH0Gie2xBAhG3jFc77Wxig9rZqk9HM20dbI';


//     // var urlUploadFile = "https://api.pdf.co/api/v1/file/upload?apiKey=" + apiKey;
//     var urlUploadFile = 'https://api.pdf.co/v1/file/upload/get-presigned-url?name=test.pdf&contenttype=application/pdf&encrypt=true';
 
//     var formData = new FormData($("#form")[0]);
//     var pageIndex = $("#pageIndex").val();
 
//     $.ajax({
//         url: urlUploadFile,
//         type: "get",
//         headers: {'x-api-key': apiKey},
//         data: formData,
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function (fileId) {
//             switch ($("#extractType").val()) {
//                 case "0":
//                     ExtractText(apiKey, fileId, pageIndex);
//                     break;
//                 case "1":
//                     ExtractXML(apiKey, fileId, pageIndex);
//                     break;
//                 case "2":
//                     ExtractCSV(apiKey, fileId, pageIndex);
//                     break;
//                 case "3":
//                     ExtractInfo(apiKey, fileId);
//                     break;
//             }
//         },
//         error: function (response) {
//             $("#errorBlock").show();
//             $("#statusCode").html(response.status);
//             $("#errors").html("");
//             $.each(response.responseJSON.Errors, function () {
//                 $("#errors").append($("&amp;lt;li&amp;gt;&amp;lt;/li&amp;gt;").html(this));
//             });
//         }
//     });
// });
 
 
// function ExtractXML(apiKey, fileId, pageIndex) {
//     var url = "https://api.pdf.co/api/v1/pdfextractor/xmlextractor/extract?apiKey=" + apiKey;
 
//     var options = {
//         "properties": {
//             "startPageIndex": pageIndex,
//             "endPageIndex": pageIndex,
//             "extractInvisibleText": false
//         },
//         "inputType": "fileId",
//         "input": fileId
//     };
 
 
//     $.ajax({
//         url: url,
//         type: "POST",
//         headers: {'x-api-key': apiKey},
//         data: JSON.stringify(options),
//         contentType: "application/json",
//         success: function (response) {
//             $("#resultBlock").show();
//             $("#result").text(xmlToString(response));
//         },
//         error: function (response) {
//             $("#errorBlock").show();
//             $("#statusCode").html(response.status);
//             $("#errors").html("");
//             $.each(response.responseJSON.Errors, function () {
//                 $("#errors").append($("&amp;lt;li&amp;gt;&amp;lt;/li&amp;gt;").html(this));
//             });
//         }
//     });
// }
 
// function ExtractText(apiKey, fileId, pageIndex) {
//     var url = "https://api.pdf.co/api/v1/pdfextractor/textextractor/extract?apiKey=" + apiKey;
 
//     var options = {
//         "properties": {
//             "startPageIndex": pageIndex,
//             "endPageIndex": pageIndex,
//             "rtlTextAutoDetectionEnabled": true,
//             "detectLinesInsteadOfParagraphs": false
//         },
//         "inputType": "fileId",
//         "input": fileId
//     };
 
//     $.ajax({
//         url: url,
//         type: "POST",
//         headers: {'x-api-key': apiKey},
//         data: JSON.stringify(options),
//         contentType: "application/json",
//         success: function (response) {
//             $("#resultBlock").show();
//             $("#result").text(response);
//         },
//         error: function (response) {
//             $("#errorBlock").show();
//             $("#statusCode").html(response.status);
//             $("#errors").html("");
//             $.each(response.responseJSON.Errors, function () {
//                 $("#errors").append($("&amp;lt;li&amp;gt;&amp;lt;/li&amp;gt;").html(this));
//             });
//         }
//     });
// }
 
// function ExtractCSV(apiKey, fileId, pageIndex) {
//     var url = "https://api.pdf.co/api/v1/pdfextractor/csvextractor/extract?apiKey=" + apiKey;
 
//     var options = {
//         "properties": {
//             "startPageIndex": pageIndex,
//             "endPageIndex": pageIndex,
//             "columnDetectionMode": "contentGroups",
//             "extractInvisibleText": false
//         },
//         "InputType": "FileId",
//         "Input": fileId
//     };
 
//     $.ajax({
//         url: url,
//         type: "POST",
//         headers: {'x-api-key': apiKey},
//         data: JSON.stringify(options),
//         contentType: "application/json",
//         success: function (response) {
//             $("#resultBlock").show();
//             $("#result").html(response);
//         },
//         error: function (response) {
//             $("#errorBlock").show();
//             $("#statusCode").html(response.status);
//             $("#errors").html("");
//             $.each(response.responseJSON.Errors, function () {
//                 $("#errors").append($("&amp;lt;li&amp;gt;&amp;lt;/li&amp;gt;").html(this));
//             });
//         }
//     });
// }
 
// function ExtractInfo(apiKey, fileId) {
//     var url = "https://api.pdf.co/api/v1/pdfextractor/infoextractor/extract?apiKey=" + apiKey;
 
//     var options = {
//         "inputType": "fileId",
//         "input": fileId
//     };
 
//     $.ajax({
//         url: url,
//         type: "POST",
//         headers: {'x-api-key': apiKey},
//         data: JSON.stringify(options),
//         contentType: "application/json",
//         success: function (response) {
//             $("#resultBlock").show();
//             $("#result").html(response);
//         },
//         error: function (response) {
//             $("#errorBlock").show();
//             $("#statusCode").html(response.status);
//             $("#errors").html("");
//             $.each(response.responseJSON.Errors, function () {
//                 $("#errors").append($("&amp;lt;li&amp;gt;&amp;lt;/li&amp;gt;").html(this));
//             });
//         }
//     });
// }
 
 
// function xmlToString(xmlData) {
 
//     var xmlString;
//     //IE
//     if (window.ActiveXObject) {
//         xmlString = xmlData.xml;
//     }
//     // code for Mozilla, Firefox, Opera, etc.
//     else {
//         xmlString = (new XMLSerializer()).serializeToString(xmlData);
//     }
//     return xmlString;
// }


$(document).ready(function () {
    $("#resultBlock").hide();
    $("#errorBlock").hide();
    $("#result").attr("href", '').html('');
});
 
$(document).on("click", "#submit", function () {
    $("#resultBlock").hide();
    $("#errorBlock").hide();
    $("#inlineOutput").text(''); // inline output div
    $("#status").text(''); // status div
 
    // var apiKey = $("#apiKey").val().trim(); //Get your API key at https://app.pdf.co
    var apiKey = 'rudra.pranay@gmail.com_43P6fCvg7WSqYIa2fg4NQZJdHf0cb6qBg00IbVha3TtF0rTVn3DQ68L8y79n6s85O6TR035Lg461FYr93cHgE962rRlBSknHANM8479vE3a31XxyNXe587XsH0Gie2xBAhG3jFc77Wxig9rZqk9HM20dbI';
 
    var formData = $("#form input[type=file]")[0].files[0]; // file to upload
    var toType = $("#convertType").val(); // output type
    var isInline = $("#outputType").val() == "inline"; // if we need output as inline content or link to output file

    $("#status").html('Requesting presigned url for upload...');

    $.ajax({
        url: 'https://api.pdf.co/v1/file/upload/get-presigned-url?name=test.pdf&contenttype=application/pdf&encrypt=true',
        type: 'GET',
        headers: {'x-api-key': apiKey}, // passing our api key
        success: function (result) {    

            if (result['error'] === false) {
                var presignedUrl = result['presignedUrl']; // reading provided presigned url to put our content into
                var accessUrl = result['url']; // reading output url that will indicate uploaded file

                $("#status").html('Uploading...');

                $.ajax({
                    url: presignedUrl, // no api key is required to upload file
                    type: 'PUT',
                    headers: {'content-type': 'application/pdf'}, // setting to pdf type as we are uploading pdf file
                    data: formData,
                    processData: false,
                    success: function (result) {                               
                        
                        $("#status").html('Processing...');

                        $.ajax({
                            url: 'https://api.pdf.co/v1/pdf/convert/to/'+toType+'?url='+ presignedUrl + '&encrypt=true&inline=' + isInline,
                            type: 'POST',
                            headers: {'x-api-key': apiKey},
                            success: function (result) { 

                                $("#status").text('done converting.');

                                // console.log(JSON.stringify(result));
                                
                                $("#resultBlock").show();

                                if (isInline)
                                {                                    
                                    $("#inlineOutput").text(result['body']);
                                }
                                else {
                                    $("#result").attr("href", result['url']).html(result['url']);
                                }
                                
                            }
                        });
                

                    },
                    error: function () {
                        $("#status").text('error');
                    }
                  });                
        

                }
            }
        });
});
 