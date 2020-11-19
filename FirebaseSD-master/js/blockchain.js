const Block = require('./block')
const game_database = {};

class Blockchain {
    constructor() {
        this.blocks = [new Block()]
        this.index = 1
    }

    getLastBlock() {
        return this.blocks[this.blocks.length - 1]
    }

    addBlock(data) {
        const index = this.index
        const previousHash = this.getLastBlock().hash

        const block = new Block(index, previousHash, data)
        let game_ref = firebase.database().ref("games/");
        this.index++
       // this.blocks.push(block)
        let game_status = game_ref.set({block}).then(function () {
            return { sucess: true, message: 'Game Created' };
        })
            .catch(function (error) {
                return { sucess: false, message: `Creation failed: ${error.message}` };
            });
        console.log(game_status);
    }

    isValid() {
        for (let i = 1; i < this.blocks.length; i++) {
            const currentBlock = this.blocks[i];
            const previousBlock = this.blocks[i - 1];

            if (currentBlock.hash !== currentBlock.generateHash()) {
                return false;
            }

            if (currentBlock.index !== previousBlock.index + 1) {
                return false;
            }

            if (currentBlock.previousHash !== previousBlock.hash) {
                return false;
            }
        }
        return true;
    };
}

module.exports = Blockchain;