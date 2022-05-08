const sendData = () => {
    let myName = document.getElementById("myName").value;
    let myEmail = document.getElementById("myEmail").value;
    let myClass = document.getElementById("myClass").value;
    let myRoll = document.getElementById("myRoll").value;

    let url = "/insertData";
    let data = { name: myName, email: myEmail, class: myClass, roll: myRoll };
    axios
        .post(url, data)
        .then(function (res) {
            alert(res.data);
        })
        .catch(function (error) {
            alert(error);
        });
};

const deleteData = () => {
    let myId = document.getElementById("myId").value;
    let url = "/deleteData";
    let data = { id: myId };
    axios
        .post(url, data)
        .then(function (res) {
            alert(res.data);
        })
        .catch(function (error) {
            alert(error);
        });
};

const updateData = () => {
    let myName = document.getElementById("myName").value;
    let myEmail = document.getElementById("myEmail").value;
    let myClass = document.getElementById("myClass").value;
    let myRoll = document.getElementById("myRoll").value;
    let myId = document.getElementById("myId").value;

    let url = "/updateData";
    let data = {
        name: myName,
        email: myEmail,
        class: myClass,
        roll: myRoll,
        id: myId,
    };
    axios
        .post(url, data)
        .then(function (res) {
            alert(res.data);
        })
        .catch(function (error) {
            alert(error);
        });
};
