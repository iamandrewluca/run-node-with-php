#!/usr/bin/env node

const [,, args] = process.argv
const data = JSON.parse(args);
console.log(JSON.stringify(data));