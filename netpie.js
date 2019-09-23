console.log(5555555555);
const APPID = "projectPJ";    // แทนที่ด้วยAppID
const KEY = "3cXUYtkTAtUpTjG";        // แทนที่ด้วยKey
const SECRET = "AgeIr599ibVhRYUBSvcBUNOdE";     // แทนที่ด้วยSecret

const ALIAS = "myhtml";        // ตั้งชื่อเรียกอุปกรณ์ (อย่างไรก็ได้ไม่จำกัด)

var microgear = Microgear.create({
    key: KEY,
    secret: SECRET,
    alias: ALIAS
});

// สร้างฟังก์ชั่นที่จะตอบสนองต่อข้อความที่เข้ามา
microgear.on('message', function (topic, msg) {
    //ในที่นี้เราจะเอาข้อความไปแทนข้อความของHTML element ชื่อdata
    document.getElementById("data").innerHTML = msg;
});

// สร้างฟังก์ชั่นที่จะถูกเรียกเมื่อเชื่อมต่อNETPIE สำเร็จ
microgear.on('connected', function () {
    microgear.setAlias(ALIAS); // ตั้งชื่อเรียกให้กับอุปกรณ์ตามตัวแปรที่ตั้งไว้ส่วนต้นของไฟล์

    // แสดงข้อความให้ทราบว่าเชื่อมต่อสำเร็จ
    document.getElementById("data").innerHTML = "Now I am connected with netpie...";

    // ตั้งค่าtimer ให้ทำงานทุก1วินาที(ตัวเลข1000มีหน่วยเป็นmsหมายถึง1000 ms)
    setInterval(function () {
        // ส่งข้อความไปยังอุปกรณ์ที่มีชื่อตามตัวแปรALIASซึ่งก็คือตัวเอง
        microgear.chat(ALIAS, "Hello from myself at " + Date.now());
    }, 1000);
});

microgear.connect(APPID);  // สร้างการเชื่อมต่อไปยังNETPIE
