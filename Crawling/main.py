import asyncio
from playwright.async_api import async_playwright
import time

async def main():
    async with async_playwright() as p:
        browser = await p.firefox.launch(headless=False)
        page = await browser.new_page()
        await page.goto("https://www.youtube.com/")
        print(await page.title())
        await page.screenshot(path="screenshot.jpeg")
        time.sleep(10)
        await browser.close()   
asyncio.run(main())


##from playwright.sync_api import sync_playwright
##import time

##with sync_playwright() as p:
   ## browser=p.chromium.launch(headless=False)
   ## page=browser.new_page()
   ## page.goto("https://www.cnbcindonesia.com/tag/pemilu-2024/5?kanal=&tipe=")
   ## print(page.title)
    ##time.sleep(10)
    ##browser.close()