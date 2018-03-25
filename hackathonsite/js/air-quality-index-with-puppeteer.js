//
// A demo script to get the air quality index base on the zip code
// 
// @author @greenido
// @date 10/2017
//
// @see https://github.com/topics/puppeteer / https://github.com/emadehsan/thal

const puppeteer = require("puppeteer");
async function run() {
  var zipArg = "" + process.argv.slice(2);
  if (zipArg.length !== 5) {
    console.log(
      zipArg.length +
        " Zip: " +
        zipArg +
        " - We must have a zip in order to run. Something like: 10021"
    );
    process.exit(1);
  }

  // Let's open chrome
  const browser = await puppeteer.launch({
    headless: true
  });

  const page = await browser.newPage();
  await page.goto("https://weather.weatherbug.com/life/air-quality/" + zipArg);

  console.log("== Start the party ==");
  const AIR_SELECTOR =
    "body > main > section.module.js-module.is-colored > div > div > div > div > div > div.life-tab > div > div.life-content > div > div > div > div > div.airquality-top-section-container.ng-scope > div.airquality-index-section > div.airquality-index-chart-container > div.index-chart-section.ng-binding";
  await page.waitFor(2 * 1000);
  let air = await page.evaluate(sel => {
    let element = document.querySelector(sel);
    return element ? element.innerHTML : null;
  }, AIR_SELECTOR);

  console.log("The air quality index: " + air + " for zip code: " + zipArg);
  browser.close();
}

run();
 @KingTut74
 
            
 
 

Leave a comment
Attach files by dragging & dropping, , or pasting from the clipboard.  Styling with Markdown is supported
© 2018 GitHub, Inc.
Terms