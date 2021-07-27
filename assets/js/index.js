const getChat = (url) => {
  return fetch(url)
    .then((res) => {
      if (!res.status) {
        throw new Error(res.statusText);
      }

      return res.json();
    })
    .then((res) => res)
    .catch((err) => err);
};

function postChat(name, textVal) {
  const header = {
    "Content-Type": "text/html",
    "Access-Control-Origin": document.URL,
  };
  const datanya = {
    nama: name,
    text: textVal,
  };
  return fetch("poster.php", {
    method: "POST",
    headers: header,
    body: JSON.stringify(datanya),
  })
    .then((res) => {
      if (!res.status) {
        throw new Error(err.statusText);
      }
      return res.text();
    })
    .then((res) => res);
}

const inputPesan = document.querySelector("#pesan"),
  btnKirim = document.querySelector(".kirim");

btnKirim.addEventListener("click", async function (e) {
  const pos = await postChat(phpSession, inputPesan.value);
  try {
    tampilChat(template);
  } catch (err) {
    alert(err);
  }
  setTimeout(() => {
    inputPesan.value = "";
  }, 0);
});

function template(person, { nama, text }) {
  if (person == "me") {
    return `<div class="container me">
              <div class="nama">${nama}</div>
              <div class="text">
                ${text}
              </div>
            </div>`;
  } else {
    return `<div class="container">
          <div class="nama">${nama}</div>
          <div class="text">
            ${text}
          </div>
        </div>
`;
  }
}

async function tampilChat(template) {
  const chat = await getChat("chat.json"),
    main = document.querySelector("main");
  let x = [];
  try {
    if (chat.length >= 1) {
      chat.forEach((item) => {
        if (item.nama == phpSession) {
          x.push(template("me", item));
        } else if ("" == phpSession) {
          window.location.href = document.domain + "/login.html";
        } else {
          x.push(template("you", item));
        }
      });
    } else {
      if (chat.nama == "Yadi") {
        x.push(template("me", chat));
      } else {
        x.push(template("you", chat));
      }
    }
    main.innerHTML = x;
    return true;
  } catch (err) {
    alert(err);
    return false;
  }
}

function filterGex(elem) {
  if (elem.length >= 1) {
    elem.forEach((re) => {
      re.innerHTML = re.textContent;
    });
  } else {
    elem[0].innerHTML = re.textContent;
  }
}

setInterval(() => {
  //const text = document.querySelectorAll(".text");
  //filterGex(text);
  tampilChat(template);
}, 0);
