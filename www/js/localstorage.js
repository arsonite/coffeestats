function Entry(email, form, dosis, date) {
    this.email = email;
    this.form = form;
    this.dosis = dosis;
    this.date = date;
}

var newEntry = new Entry(null, null, null, null);

function randomGenerate() {
    var sorts = [
    "Filterkaffee",
    "Espresso",
    "Instantkaffee",
    "Schwarzer Tee",
    "Grüner Tee",
    "Coca-Cola",
    "Fritz Kola",
    "Club Mate"
            ];
    addToStorage(new Entry(
        Math.random().toString(26).substr(2, 5) + "@" + Math.random().toString(26).substr(2, 5) + ".de",
        sorts[Math.floor(Math.random() * sorts.length)],
        Math.floor(Math.random() * 250),
        Math.floor(Math.random() * 31 + 1) + "." +
        Math.floor(Math.random() * 12 + 1) + "." +
        Math.floor(Math.random() * 18 + 2000)
    ));
    location.reload();
}

var empty = false;3
for (x in newEntry) {
    if (newEntry[x] == null) {
        empty = true;
        console.log(newEntry);
        console.log("Entry is empty");
        break;
    }
}

if (!empty) {
    addToStorage(newEntry);
}

function addToStorage(entry) {
    var i = localStorage.length;
    localStorage[i] = JSON.stringify(entry);
}

function printStorage() {
    console.log("localStorage-length: " + localStorage.length);
    for (i = 0; i < localStorage.length; i++) {
        console.log("At index " + i + ": " + localStorage.getItem(i));
    }
    writeStorage();
}

function clearStorage() {
    localStorage.clear();
    console.log("localStorage cleared");
    location.reload();
}

function deleteStorage() {
    var arr = [];
    for (i = 0; i < localStorage.length; i++) {
        if (document.getElementById(i).checked == true) {
            localStorage.removeItem(i);
            continue;
        } else {
            arr[i] = JSON.parse(localStorage.getItem(i));
        }
    }
    clearStorage();
    for (i = 0; i < arr.length; i++) {
        addToStorage(arr[i]);
    }
}

function writeStorage() {
    var t = document.getElementById("results");
    for (i = 0; i < localStorage.length; i++) {
        var e = JSON.parse(localStorage.getItem(i));
        var r = t.insertRow(i + 1);
        r.insertCell(0).innerHTML = '<input type="checkbox" name="select" id="' + i + '">';
        r.insertCell(1).innerHTML = e.email;
        r.insertCell(2).innerHTML = e.date;
        r.insertCell(3).innerHTML = e.form;
        r.insertCell(4).innerHTML = e.dosis;
    }
}

window.onload = printStorage;