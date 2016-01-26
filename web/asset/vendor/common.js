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

$(function () {
    selectedMenu();
});

function selectedMenu(){
    var pgurl = window.location.pathname;
    $("ul.nav-list li").each(function(){
        var link = $("a",this).attr('href');
        if(link == pgurl){
            if($(this).closest("ul.submenu").length == 1){
                var head = $(this).closest("ul.submenu").parent().find("a.dropdown-toggle");
                head.dropdown("toggle");
            }
            $(this).addClass("active");
        }
    });
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

function statusConvert(process, input){
    /*input = {
        code: "request",
        result: "WAIT",
        datetime: "2016-01-18 14:32:20"
    };*/

    if(process == "certificate") {
        var processCode = {
            request: "ยื่นคำขอใบอนุญาต",
            verify: "ตรวจสอบเอกสาร",
            assign1: "มอบหมายชุดตรวจ",
            assign2: "มอบหมายชุดตรวจ",
            monitoring: "ตรวจสถานประกอบการ",
            transfer: "ส่งมอบเอกสารหลักฐาน",
            approve: "พิจารณาคำขอใบอนุญาต"
        };
    }

    var statusCode = {
        WAIT: "รอ",
        YES: "ผ่าน",
        NO: "ไม่ผ่าน"
    };

    var output = {
        code: processCode[input["code"]],
        status: statusCode[input["result"]]+" - "+processCode[input["code"]],
        datetime: datetimeTH(input["datetime"])
    };

    return output;

}

function datetimeTH(datetime){
    var monthTH = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

    var input = datetime.split(" ");

    var day = input[0].substr(8, 2);
    var month = monthTH[parseInt(input[0].substr(5, 2)) - 1];
    var year = parseInt(input[0].substr(0,4)) + 543;

    var datetimeTH = day+" "+month+" "+year;
    if(input[1] !== "undefined") {
        datetimeTH += " "+input[1]+" น.";
    }

    return datetimeTH;

}

function selectMDB(filter){
    var param = '';
    if(typeof filter !== "undefined")
        param = "?filter="+JSON.stringify(filter);

    var value = "";
    $.ajax({
        url: "http://mdb.codeunbug.com/culture/cert/"+param,
        type: "get",
        async: false,
        timeout: 20000, // 1000 = 1 s
        dataType: "json",
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
            if(typeof result["_embedded"] !== "undefined"){
                value = result["_embedded"]["rh:doc"];
            }
            else{
                value = [];
            }

        }
    });
    return value;
}

function insertMDB(data){
    var value = "";
    $.ajax({
        url: "http://mdb.codeunbug.com/culture/cert/",
        type: "post",
        async: false,
        timeout: 20000, // 1000 = 1 s
        dataType: "json",
        data: JSON.stringify(data),
        contentType: "application/json",
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
                alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            else if (xhr.status == 201) {
                value = "success"
            }
            else {
                value = "Time Out!!";
            }
        },
        success: function (result) {
        }
    });
    return value;
}

function updateMDB(data){
    var value = "";
    $.ajax({
        url: "http://mdb.codeunbug.com/culture/cert/"+data["_id"]["$oid"],
        type: "patch",
        async: false,
        timeout: 20000, // 1000 = 1 s
        dataType: "json",
        data: JSON.stringify(data),
        contentType: "application/json",
        headers:{
            "if-match": data["_etag"]["$oid"]
        },
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
                alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            else {
                value = "Time Out!!";
            }
        },
        success: function (result) {
            value = "success";
        }
    });
    return value;
}

function deleteMDB(data){
    var value = "";
    $.ajax({
        url: "http://mdb.codeunbug.com/culture/cert/"+data["_id"]["$oid"],
        type: "delete",
        async: false,
        timeout: 20000, // 1000 = 1 s
        dataType: "json",
        contentType: "application/json",
        headers:{
            "if-match": data["_etag"]["$oid"]
        },
        error: function (xhr) {
            if (xhr.status == 401) {
                window.location.href = xhr.getResponseHeader('Location');
            }
            else if (xhr.status == 403) {
                alert("ไม่มีสิทธิ์ใช้งานส่วนนี้");
            }
            else if (xhr.status == 204) {
                value = "success";
            }
            else {
                value = "Time Out!!";
            }
        },
        success: function (result) {
            value = "success";
        }
    });
    return value;
}