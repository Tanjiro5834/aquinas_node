const db = require("../Config/db");

exports.getAll = async () => {
  const result = await db.query("SELECT * FROM news");
  return result.rows;
};