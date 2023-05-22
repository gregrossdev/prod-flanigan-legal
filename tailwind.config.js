/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: ["opacity-0"],

    theme: {
        fontFamily: {
            header: ["Merriweather", "serif"],
            body: ["Poppins", "sans-serif"],
        },
        screens: {
            xs: "375px",
            ...defaultTheme.screens,
        },
        colors: {
            transparent: "transparent",
            primary: "#AE9C77",
            "primary-light": "#C1B090",
            "primary-lighter": "#C4B395",

            // grey: "#202020",
            grey: "#383838",
            "grey-dark": "#2E2E2E",
            "grey-darker": "rgba(56, 56, 56, 0.60)",
            "grey-darkest": "rgba(56, 56, 56, 0.70)",
            "grey-light": "#595959",
            "grey-blur": "rgba(56, 56, 56, 0.40)",
            white: "#ffffff",
            black: "#000000"
        },
        container: {
            center: true,
            padding: "1.2rem",
        },
        extend: {
            fontSize: {
                big: "15.5rem",
            },
            letterSpacing: {
                widest: "0.35em",
            },

            lineHeight: {
                loose: 1.85,
            },
            inset: {
                "4/10": "40%",
            },
            spacing: {
                "1/2": "50%",
                "1/3": "33.333333%",
                "2/3": "66.666667%",
                "1/4": "25%",
                "3/4": "75%",
                "1/5": "20%",
                "2/5": "40%",
                "3/5": "60%",
                "4/5": "80%",
                76: "19rem",
                88: "22rem",
                96: "24rem",
                104: "26rem",
                120: "30rem",
                124: "31rem",
                130: "32.5rem",
                136: "34rem",
                156: "39rem",
                236: "59rem",
            },
            width: {
                "1/10": "10%",
                "3/10": "30%",
                "9/10": "90%",
            },

            listStyleType: {
                latin: "lower-latin",
                circle: "circle",
                square: "square",
                roman: "upper-roman",
            },

            maxHeight: {
                0: "0",
            },

            zIndex: {
                100: "100",
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        color: theme("colors.grey-dark"),
                        "h1, h2, h3, h4, h5, h6": {
                            fontFamily: theme("fontFamily.header").join(","),
                            fontWeight: theme("fontWeight.normal"),
                            lineHeight: theme("lineHeight.tight"),
                            color: theme("colors.secondary"),
                        },
                        strong: {
                            fontWeight: theme("fontWeight.bold"),
                        },
                        a: {
                            color: theme("colors.primary"),
                            textDecoration: "none",
                            fontWeight: theme("fontWeight.normal"),
                        },
                        p: {
                            lineHeight: theme("lineHeight.relaxed"),
                        },
                        li: {
                            lineHeight: theme("lineHeight.loose"),
                        },
                        blockquote: {
                            borderColor: theme("colors.primary"),
                            borderLeftWidth: theme("spacing.2"),
                            fontStyle: theme("fontStyle.italic"),
                            fontWeight: theme("fontWeight.normal"),
                            fontSize: theme("fontSize.lg"),
                            padding: `${theme("spacing.4")} ${theme("spacing.6")}`,
                            p: {
                                margin: 0,
                            },
                        },
                        table: {
                            borderWidth: "1px",
                            borderColor: theme("colors.grey-darker"),
                            tbody: {
                                th: {
                                    color: theme("colors.white"),
                                    backgroundColor: theme("colors.grey"),
                                    padding: `${theme("spacing.2")} ${theme("spacing.3")}`,
                                },
                                td: {
                                    borderColor: "colors.grey-darker",
                                    borderRightWidth: "1px",
                                    borderBottomWidth: "1px",
                                    padding: `${theme("spacing.2")} ${theme("spacing.3")}`,
                                    "&:first-child": {
                                        padding: `${theme("spacing.2")} ${theme("spacing.3")}`,
                                    },
                                },
                            },
                        },
                    },
                },
            }),
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
}
