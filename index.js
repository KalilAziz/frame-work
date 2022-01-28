console.log('########################### assign ###################################')

// Podemos usar o Object.getOwnPropertyDescriptor() para ver as 4 informarção de um atributo que vimos anteriormente (enumerable, value, writable e configurable). Para que possamos utilizar o Object.getOwnPropertyDescriptor(), temos que declarar Object.getOwnPropertyDescriptor(), e dentro dos parenteses, temos que colocar duas informações separados por vírgulas, a primeira é o nome do obejto, e o segundo é o nome do atributo entre aspas. E para complementar, podemos utilizar Object.defineProperties para poder editar essas informações.

const produto =  {
    nome: 'caneca',
    preco: 1.8,
};
console.log('########################## Demonstração ##############################')

console.log(Object.getOwnPropertyDescriptor(produto, 'nome'))
/*

*/

Object.defineProperty(produto, 'nome', {
    writable: false,
    configurable: false
})
console.log(Object.getOwnPropertyDescriptor(produto, 'nome'))
