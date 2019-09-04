const db = require('./config');
const puppeteer = require('puppeteer');
// const CRED = require('./secret.rem');

const sleep = async (ms) => {
    return new Promise((res, rej) => {
        setTimeout(() => {
            res();
        }, ms)
    });
}

const ID = {
    login: 'input[name="session[username_or_email]"]',
    pass: 'input[name="session[password]"]'
};

db.connect(function (err) {
    if (err) throw err;

    let sql = "select * from influencers where status = '1'";
    db.query(sql, function (err, result) {
        if (err) throw err;

        result.forEach(influencer => {
            crowling(influencer);
        });
    });
});

async function crowling(influencer) {

    const browser = await puppeteer.launch({
        headless: false,
        args: ['--no-sandbox', '--disable-setuid-sandbox', '--disable-notifications']
    });

    const page = await browser.newPage();

    let login = async () => {
        // login
        // await page.goto('https://mobile.twitter.com/login', {
        //     waitUntil: 'networkidle2'
        // });

        // await page.waitForSelector(ID.login);
        // await page.type(ID.login, CRED.user);
        // await page.type(ID.pass, CRED.pass);
        // await page.click('div[role="button"]')

        await page.goto('https://instagram.com/' + influencer.instagram_username, {
            waitUntil: 'networkidle2'
        });

        await sleep(1000);

        // const followings = await page.$x('//*[@id="react-root"]/div/div/div/main/div/div[2]/div/div/div/div/div/div/div[1]/div/div[5]/div[1]/a/span[1]/span')
        // let following = await page.evaluate(following => following.textContent, followings[0]);

        // const followers = await page.$x('//*[@id="react-root"]/div/div/div/main/div/div[2]/div/div/div/div/div/div/div[1]/div/div[5]/div[2]/a/span[1]/span')
        // let follower = await page.evaluate(follower => follower.textContent, followers[0]);

        const followers = await page.$x('//*[@id="react-root"]/section/main/div/header/section/ul/li[2]/a/span')
        let follower = await page.evaluate(follower => follower.getAttribute("title"), followers[0]);

        console.log(follower);
        // console.log(following);

        let sql = "UPDATE `influencers` SET `followers` = '"+follower+"' WHERE instagram_username = '" + influencer.instagram_username + "'";
        await db.query(sql, function (err, result) {
            if (err) throw err;
            console.log('Update Data Berhasil')
        });

        await page.close();

    }
    await login();
    await browser.close();
}