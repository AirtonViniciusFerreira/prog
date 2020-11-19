const Blockchain = require('./blockchain');
const game_database = {};

let game_id = false;

function newGame() {
    const game_data = {
        Nome: document.getElementById("nome").value,
        Tipo: document.getElementById("tipo").value,
        createdat: firebase.database.ServerValue.TIMESTAMP,
    };

    if (!game_id) {
        game_id = firebase.database().ref().child('games').push().key;
    }

    // let updates = {};
    // updates[game_id] = game_data;

    let game_ref = firebase.database().ref("games/" + game_id);

    let game_status = game_ref.set({
        Nome: document.getElementById("nome").value,
        Tipo: document.getElementById("tipo").value,
        createdat: firebase.database.ServerValue.TIMESTAMP,
    }).then(function () {
        return { sucess: true, message: 'Game Created' };
    })
        .catch(function (error) {
            return { sucess: false, message: `Creation failed: ${error.message}` };
        });
    console.log(game_status);
    game_id = false;
}

function novoGame() {
    const blockchain = new Blockchain();
    const game_data = {
        Nome: document.getElementById("nome").value,
        Tipo: document.getElementById("tipo").value,
    };

    blockchain.addBlock(game_data);
    console.log(blockchain.isValid()) // true
    //blockchain.blocks[1].data.amount = 30000 // ataque malicioso
    //console.log(blockchain.isValid()) // false
}