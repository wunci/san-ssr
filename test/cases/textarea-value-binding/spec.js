it('two way binding textarea value', function (done) {
    // [inject] init

    const span = wrap.getElementsByTagName('span')[0]
    const input = wrap.getElementsByTagName('textarea')[0]
    expect(span.title).toBe('errorrik')
    expect(input.value).toBe('errorrik')

    function doneSpec () {
        const name = myComponent.data.get('name')

        if (name !== 'errorrik') {
            expect(span.title).toBe(name)

            myComponent.dispose()
            document.body.removeChild(wrap)
            done()
            return
        }

        setTimeout(doneSpec, 500)
    }

    triggerEvent(input, 'input', 'test' + (+new Date()))
    setTimeout(doneSpec, 500)
})