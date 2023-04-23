var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");

var Parameter = {
  url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
  method: "GET", 
  responseType: "application/json", 
};

var promise = axios(Parameter);
//Xử lý khi request thành công
promise.then(function (result) {
  renderCity(result.data);
});

function renderCity(data) {
        districts.length = 1;
        const result = data.filter(n => n.Id === "79");
    
        for (const k of result[0].Districts) {
            districts.options[districts.options.length] = new Option(k.Name, k.Id);
        }

       //Xử lý khi thay đổi quận huyện thì sẽ hiển thị ra phường xã thuộc quận huyện đó
        districts.onchange = function () {
        wards.length = 1;
        const dataCity = data.filter((n) => n.Id === "79");
        if (this.value != "") {
          const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;
          for (const w of dataWards) {
            wards.options[wards.options.length] = new Option(w.Name, w.Id);
                }
            }
        };
  
}

