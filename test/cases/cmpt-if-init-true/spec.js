it('component with san-if, init with true', function (done) {
    // [inject] init

    expect(myComponent.data.get('jokeName')).toBe('airike')
    expect(myComponent.data.get('name')).toBe('errorrik')
    myComponent.data.set('name', 'erik')
    myComponent.data.set('jokeName', '2b')

    const span = wrap.getElementsByTagName('span')[0]
    expect(span.innerHTML.indexOf('airike')).toBe(0)
    expect(span.title).toBe('errorrik')

    san.nextTick(function () {
        const span = wrap.getElementsByTagName('span')[0]
        expect(span.innerHTML.indexOf('2b')).toBe(0)
        expect(span.title).toBe('erik')
        expect(myComponent.data.get('jokeName')).toBe('2b')
        expect(myComponent.data.get('name')).toBe('erik')

        myComponent.dispose()
        document.body.removeChild(wrap)
        done()
    })
})