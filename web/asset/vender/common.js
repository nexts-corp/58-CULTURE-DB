$.extend(true, $.fn.dataTable.defaults, {
    "destroy": true,                 
    "iDisplayLength": 50,
    "oLanguage": {
        "sInfo": "รายการที่ _START_ ถึง _END_ จาก <span style='color: blue;'>_TOTAL_</span> รายการ",
        "sInfoEmpty": "",
        "sInfoFiltered" : "(จากทั้งหมด _MAX_ รายการ)",
        "sEmptyTable": "ไม่มีข้อมูล",
        "sLengthMenu": "_MENU_ รายการต่อหน้า",
        "oPaginate": {
            "sPrevious": "❮❮",
            "sNext": "❯❯"
        },
        "sSearch": "ค้นหา : "
    }
});

function getFormValue(formId, inputs) {
    if (inputs == null || inputs == undefined) {
        inputs = $("#" + formId).find("input");
    }
    var data = {};
    $(inputs).each(function (i) {
        var fname = $(this).attr("name");
        var fvalue = $(this).val();
        data[fname] = fvalue;
    });
    return data;
}
function getFormValues(formId) {
    var datas = [];
    var n = $("#" + formId).attr("data-size");
    for (var i = 0; i < n; i++)
    {
        var inputs = $("#" + formId).find("input[row-index='" + i + "'],select[row-index='" + i + "']");
        var data = getFormValue(formId, inputs);
        datas.push(data);
    }
    return datas;
}

function sendData(formId, callback) {
    var url = $("#" + formId).attr("action");
    var pname = $("#" + formId).attr("name");
    var method = $("#" + formId).attr("method");
    var isArray = $("#" + formId).attr("isArray");
    var data = {};
    if (isArray != undefined && isArray == "true") {
        data = getFormValues(formId);
    } else {
        data = getFormValue(formId, null);
    }

    var fdata = {};
    fdata[pname] = data;
    var dataJSON = JSON.stringify(fdata);

    var dataJSONEN = encodeURIComponent(dataJSON);
    $.ajax({
        url: url,
        cache: false,
        type: method,
        data: dataJSONEN,
        async: true,
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
               alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            value = "Time Out!!";

        },
        success: function (data) {
            //console.log(data);
            // return data;
            callback(data);
        }
    });
    return false;
}

function dataJson(formId) {
    var pname = $("#" + formId).attr("name");
    var isArray = $("#" + formId).attr("isArray");
    var data = {};
    if (isArray != undefined && isArray == "true") {
        data = getFormValues(formId);
    } else {
        data = getFormValue(formId, null);
    }

    var fdata = {};
    fdata[pname] = data;
    var dataJSON = JSON.stringify(fdata);

    var dataJSONEN = encodeURIComponent(dataJSON);

    return dataJSONEN;
}

function callAjaxFile(url, type, data, dataType) {
    var value = "";
    $.ajax({
        url: url,
        type: type,
        async: false,
        timeout: 60000, // 1000 = 1 s
        dataType: dataType,
        data: data,
        enctype: 'multipart/form-data',
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
                alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            value = "Time Out!!";

        },
        success: function (result) {
            value = result;
        }
    });
    return value;
}

function callAjax(url, type, data, dataType) {
    var value = "";
    $.ajax({
        url: url,
        type: type,
        async: false,
        timeout: 20000, // 1000 = 1 s
        dataType: dataType,
        data: data,
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
               alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            value = "Time Out!!";

        },
        success: function (result) {
            value = result;
        }
    });
    return value;
}

function getTag(param, defaultValue) {
    if (param == null || param == "" || param == " ")
        param = defaultValue;

    return param;
}


function jsonEncode(data) {
    var dataJSON = JSON.stringify(data);
    var dataJSONEN = encodeURIComponent(dataJSON);
    return dataJSONEN;
}

function getHTML(id, link, data) {
    
    //have data ==> getHTML("navbar","/api/xxx/xxx/",{name:name});
    ////have data ==> getHTML("navbar","/api/xxx/xxx/",jsonEncode(xxx));
    //dont have data ==> getHTML("navbar","/api/xxx/xxx/",null);
    if (data == null) {
        $.ajax({
            url: link,
            type: 'post',
            async: true,
            error: function (xhr) {
                if (xhr.status == 401) {
                    window.location.href = xhr.getResponseHeader('Location');
                }
            },
            success: function (result) {
                $('#' + id).html(result);
            }
        });
    } else {
        $.ajax({
            url: link,
            data: data,
            type: 'post',
            async: true,
            error: function (xhr) {
                if (xhr.status == 401) {
                    window.location.href = xhr.getResponseHeader('Location');
                }
            },
            success: function (result) {
                $('#' + id).html(result);
            }
        });
    }
}

function text2html(input){
    return input.replace(/\n/g, '<br>');
}