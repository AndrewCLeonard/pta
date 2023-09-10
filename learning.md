## [WP File Structure](https://developer.wordpress.org/themes/block-themes/block-theme-setup/)

-   patterns (dir)
-   parts (dir)
    -   footer.html
    -   header.html
-   templates(dir)
    -   404.html
    -   archive.html
    -   index.html (required)
    -   singular.html
-   functions.php
-   index.php
-   README.txt
-   screenshot.png
-   style.css (required)
-   theme.json ("optional but strongly recommended." "When you add theme.json to your theme, the template editor is enabled.")

### `editor-style.css`

styles here will change the appearance of the editing area of the block editor, where it says "Type / to choose a block"

### [Theme.json](https://developer.wordpress.org/themes/advanced-topics/theme-json/)

#### [Schema Link](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/#developing-with-theme-json)

Add `"$schema": "https://schemas.wp.org/trunk/theme.json"` to top of `theme.json` to get tooltips

#### `Theme.json` vs. `style.css`

https://css-tricks.com/managing-css-styles-in-a-wordpress-block-theme/

#### Fonts

https://fullsiteediting.com/lessons/theme-json-typography-options/

#### Boilerplate `Theme.json`

```
{
  "version": 1,
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "",
          "color": ""
        }
      ],
      "gradients": [
        {
          "slug": "",
          "gradient": ""
        }
      ],
      "custom": true,
      "customGradient": true
    },
    "typography": {
      "fontSizes": [
        {
          "slug": "",
          "size": ""
        }
      ],
      "fontFamilies": [
        {
          "slug": "",
          "fontFamily": ""
        }
      ],
      "customFontSize": true,
      "customLineHeight": true
    },
    "spacing": {
      "customPadding": true,
      "customMargin": true,
      "units": [
        "px",
        "em",
        "%"
      ]
    },
    "custom": {
      "my-custom-setting": {
        "default": ""
      }
    }
  },
  "styles": {
    "root": {
      "color": {
        "background": "",
        "text": ""
      },
      "typography": {
        "fontSize": "",
        "lineHeight": ""
      }
    },
    "core/paragraph": {
      "color": {
        "text": "",
        "background": ""
      },
      "typography": {
        "fontSize": ""
      }
    }
  }
}

```

### `functions.php`

Methods for "enqueueing" style sheets are frustrating. The documentation is unclear and unhelpful.

## Style Book

### Colors

https://coolors.co/ffffff-000000-07137b-fadf4b-4aa1de-5a331c-92bc2b

| `color` | `name`         | `slug`       |
| ------- | -------------- | ------------ |
| #ffffff | White          | base         |
| #000000 | Black          | contrast     |
| #07137b | Phthalo blue   | primary      |
| #fadf4b | Naples yellow  | secondary    |
| #4aa1de | Celestial Blue | tertiary     |
| #5a331c | Seal brown     | accent-brown |
| #92bc2b | Apple green    | accent-green |

```
- Tailwind

{ 'white': { DEFAULT: '#ffffff', 100: '#333333', 200: '#666666', 300: '#999999', 400: '#cccccc', 500: '#ffffff', 600: '#ffffff', 700: '#ffffff', 800: '#ffffff', 900: '#ffffff' }, 'black': { DEFAULT: '#000000', 100: '#000000', 200: '#000000', 300: '#000000', 400: '#000000', 500: '#000000', 600: '#333333', 700: '#666666', 800: '#999999', 900: '#cccccc' }, 'phthalo_blue': { DEFAULT: '#07137b', 100: '#010418', 200: '#030730', 300: '#040b48', 400: '#060f60', 500: '#07137b', 600: '#0b1dc1', 700: '#263bf2', 800: '#6e7cf7', 900: '#b7befb' }, 'naples_yellow': { DEFAULT: '#fadf4b', 100: '#403602', 200: '#7f6d03', 300: '#bfa305', 400: '#f9d50c', 500: '#fadf4b', 600: '#fbe670', 700: '#fced94', 800: '#fdf3b7', 900: '#fef9db' }, 'celestial_blue': { DEFAULT: '#4aa1de', 100: '#092132', 200: '#124264', 300: '#1c6396', 400: '#2584c8', 500: '#4aa1de', 600: '#6eb3e4', 700: '#92c6eb', 800: '#b7d9f2', 900: '#dbecf8' }, 'seal_brown': { DEFAULT: '#5a331c', 100: '#120a06', 200: '#24140b', 300: '#361e11', 400: '#482816', 500: '#5a331c', 600: '#96542e', 700: '#c8794b', 800: '#daa587', 900: '#edd2c3' }, 'apple_green': { DEFAULT: '#92bc2b', 100: '#1d2508', 200: '#3a4b11', 300: '#587019', 400: '#759622', 500: '#92bc2b', 600: '#add548', 700: '#c2e076', 800: '#d6eaa4', 900: '#ebf5d1' } }

- CSV

ffffff,000000,07137b,fadf4b,4aa1de,5a331c,92bc2b

- With #

#ffffff, #000000, #07137b, #fadf4b, #4aa1de, #5a331c, #92bc2b

- Array

["ffffff","000000","07137b","fadf4b","4aa1de","5a331c","92bc2b"]

- Object

{"White":"ffffff","Black":"000000","Phthalo blue":"07137b","Naples yellow":"fadf4b","Celestial Blue":"4aa1de","Seal brown":"5a331c","Apple green":"92bc2b"}

- Extended Array

[{"name":"White","hex":"ffffff","rgb":[255,255,255],"cmyk":[0,0,0,0],"hsb":[0,0,100],"hsl":[0,0,100],"lab":[100,0,0]},{"name":"Black","hex":"000000","rgb":[0,0,0],"cmyk":[0,0,0,100],"hsb":[0,0,0],"hsl":[0,0,0],"lab":[0,0,0]},{"name":"Phthalo blue","hex":"07137b","rgb":[7,19,123],"cmyk":[94,85,0,52],"hsb":[234,94,48],"hsl":[234,89,25],"lab":[15,38,-58]},{"name":"Naples yellow","hex":"fadf4b","rgb":[250,223,75],"cmyk":[0,11,70,2],"hsb":[51,70,98],"hsl":[51,95,64],"lab":[89,-6,72]},{"name":"Celestial Blue","hex":"4aa1de","rgb":[74,161,222],"cmyk":[67,27,0,13],"hsb":[205,67,87],"hsl":[205,69,58],"lab":[64,-7,-39]},{"name":"Seal brown","hex":"5a331c","rgb":[90,51,28],"cmyk":[0,43,69,65],"hsb":[22,69,35],"hsl":[22,53,23],"lab":[26,15,22]},{"name":"Apple green","hex":"92bc2b","rgb":[146,188,43],"cmyk":[22,0,77,26],"hsb":[77,77,74],"hsl":[77,63,45],"lab":[71,-34,63]}]

- XML

<palette>
  <color name="White" hex="ffffff" r="255" g="255" b="255" />
  <color name="Black" hex="000000" r="0" g="0" b="0" />
  <color name="Phthalo blue" hex="07137b" r="7" g="19" b="123" />
  <color name="Naples yellow" hex="fadf4b" r="250" g="223" b="75" />
  <color name="Celestial Blue" hex="4aa1de" r="74" g="161" b="222" />
  <color name="Seal brown" hex="5a331c" r="90" g="51" b="28" />
  <color name="Apple green" hex="92bc2b" r="146" g="188" b="43" />
</palette>
```

## [PTA Brand Guidelines](https://www.pta.org/home/run-your-pta/PTA-Branding-and-Web-Guidelines)

## Other Questions

-   What is "Gutenberg" in WP?
