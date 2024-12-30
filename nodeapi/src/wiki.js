const express = require('express');
const router = express.Router();

// ホームページルート
router.get('/', (req, res) => {
  res.send('Wiki home page');
});

// about ページルート
router.get('/about', (req, res) => {
  res.send('About this wiki');
});

module.exports = router;