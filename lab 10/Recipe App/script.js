async function loadMenu() {
    const response = await fetch("api/menu.json");
    const menu = await response.json();
    const container = document.getElementById("menu");

    menu.forEach(item => {
        container.innerHTML += `
            <div class="card">
                <img src="${item.image}" alt="${item.name}">
                <div class="content">
                    <h2>${item.name}</h2>
                    <p class="price">$${item.price}</p>
                    <p class="desc">${item.desc}</p>
                    <button>Order Now</button>
                </div>
            </div>
        `;
    });

}

loadMenu();