# Project Setup 

TailwindCSS (TW)

https://tailwindcss.com/docs/installation

	npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
	npx tailwindcss init

	npm install -D postcss-cli

How to build CSS:

	npm run compile

NOTE: This is the most basic TW project setup. It uses the `postcss-cli`
tool to compile the `styles.css` as source and output the `compiled.css` output.

How to preview index.html:

	php -S localhost:3000
	open http://localhost:3000
	