# Project Setup 

TailwindCSS (TW)

https://tailwindcss.com/docs/installation

	npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
	npx tailwindcss init

	npm install -D postcss-cli

How to build CSS:

	npx postcss styles.css -o compiled.css

NOTE: This is the most basic TW project setup. It uses the `postcss-cli`
tool to compile the `styles.css` as source and output the `compiled.css` output.
