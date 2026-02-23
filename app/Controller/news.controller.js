const News = require("../models/news.model");

exports.getAll = async (req, res) => {
    try{
        const news = await News.getAll();
    }catch(err){
        console.log(err);
        res.status(500).json({message: "Database error"});
    }
};