'use strict';

const express = require('express');
const wiki = require('./wiki.js');
const cors = require('cors');

const PORT = '8080';
const HOST = '0.0.0.0';

const app = express();

app.use('/wiki', wiki);

app.get('/', (req, res) => {
  res.send('Hello, express!');
});

app.get('/index', (req, res) => {
  res.send('index dayo');
})

app.listen(PORT, HOST, () => {
  console.log(`Running on http://${HOST}:${PORT}`);
});

// cors制限解除
app.use(cors({
  origin: '*'
}));