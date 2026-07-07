const API_KEY="f54a41d7c3be6c8af6466897b744024b";

const btn=document.getElementById("btn");
const cityInput=document.getElementById("cityInput");
const result=document.getElementById("result");

btn.onclick=getWeather;

cityInput.addEventListener("keypress",(e)=>{
   if(e.key==="Enter")getWeather();
});

async function getWeather(){

    const city=cityInput.value.trim();

    if(!city)return alert("Enter city name");

    const url=`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${API_KEY}`;

try{

    const res=await fetch(url);
    const data=await res.json();

    if(data.cod!=200){
    result.innerHTML="<p>City not found!</p>";
    return;
}




result.innerHTML=`
    <div class="city">${data.name}, ${data.sys.country}</div>
    <div class="temp">${Math.round(data.main.temp)}°C</div>

    <div class="card">
    <span class="material-icons">cloud</span>
    ${data.weather[0].main}
    </div>

    <div class="card">
    <span class="material-icons">water_drop</span>
    Humidity: ${data.main.humidity}%
    </div>

    <div class="card">
    <span class="material-icons">air</span>
    Wind: ${data.wind.speed} m/s
    </div>
    `;

}catch{
    alert("Something went wrong!");
}

}