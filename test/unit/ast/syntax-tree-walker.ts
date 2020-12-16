import { walk } from '../../../src/ast/syntax-tree-walker'

describe('ast/syntax-tree-walker', () => {
    it('should throw if kind not supported', () => {
        expect(() => [...walk({ kind: 88888 })]).toThrow(/not supported/)
    })
})
