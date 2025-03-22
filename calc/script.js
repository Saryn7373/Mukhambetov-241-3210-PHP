class Calculator {
    constructor(CalcDOM) {
        this.calc = CalcDOM,
            this.input = this.getInput(),
            this.term = '',
            this.nums = this.getNums(),
            this.ops = this.getOps(),
            this.isActive = true,
            this.btns()
    }



    getInput() {
        const input = this.calc.children.item(0)
        return input
    }

    getNums() {
        const nums = this.calc.children.item(1).children
        return nums
    }

    getOps() {
        const ops = this.calc.children.item(2).children
        return ops
    }

    updateInput() {
        this.input.value = this.term
    }

    numHandler(ev) {
        ev.preventDefault
        if(!(ev.target.getAttribute('value') === '0' && this.term.endsWith('0'))) {
            this.term += ev.target.getAttribute('value')
            this.updateInput()
        }
    }

    async opHandler(ev) {
        ev.preventDefault
        const forbiddenEndings = ['*', '/', '+', '-', '(']

        switch (ev.target.getAttribute('value')) {
            case 'C':
                this.term = ''
                this.updateInput()
                break
            case '=':
                if (forbiddenEndings.some((end) => this.term.endsWith(end))) {
                    this.term = this.term.split('')
                    this.term.pop()
                    this.term = this.term.join('')
                    this.updateInput()
                }
                else if (this.term.split(')').length !== this.term.split('(').length) {
                    alert('Вы не закрыли скобку')
                }
                else {
                    this.term = await this.getData()
                    this.updateInput()
                }
                break

            case '(':
                this.term += ev.target.getAttribute('value')
                this.updateInput()
                break
            case ')':
                if ((this.term.split(')').length < this.term.split('(').length) && 
                    (!forbiddenEndings.some((end) => this.term.endsWith(end)))) {
                        this.term += ev.target.getAttribute('value')
                        console.log(this.term)
                        this.updateInput()
                }
                break

            default:
                if ((!forbiddenEndings.some((end) => this.term.endsWith(end))) || 
                    (this.term.endsWith('(') && ev.target.getAttribute('value') === '-')) {
                        this.term += ev.target.getAttribute('value')
                        this.updateInput()
                }
        }
    }

    async getData() {
        const req = await fetch('http://localhost/Mukhambetov-241-3210/calc/back.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({data: this.term})
        }).then(res => {
            res = res.json()
            return res
        })//.then(res => {
        //     res = (res.data).toString()
        //     return res
        // })

        const res = await req.data
        return res.toString()
    }

    btns() {
        for (let num of this.nums) {
            num.addEventListener('click', (ev) => this.numHandler(ev))
        }

        for (let op of this.ops) {
            op.addEventListener('click', (ev) => this.opHandler(ev))
        }
    }
}

const calc = new Calculator(document.querySelector('#calc'))