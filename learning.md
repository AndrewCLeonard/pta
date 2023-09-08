# [WP File Structure](https://developer.wordpress.org/themes/block-themes/block-theme-setup/)

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

## `editor-style.css`

styles here will change the appearance of the editing area of the block editor, where it says "Type / to choose a block"

## [Theme.json](https://developer.wordpress.org/themes/advanced-topics/theme-json/)

### [Schema Link](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/#developing-with-theme-json)

Add `"$schema": "https://schemas.wp.org/trunk/theme.json"` to top of `theme.json` to get tooltips

### Boilerplate `Theme.json`

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

## Other Questions
- What is "Gutenberg" in WP?