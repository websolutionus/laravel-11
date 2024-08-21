$(function () {

    "use strict";

    //====== header setting js ======
    $(".setting").on("click", function (event) {
        $(".drop_menu_setting").toggleClass("show_setting");
        event.stopPropagation();
        $(".drop_menu_user").removeClass("show_setting");

        $(".drop_list").removeClass("show_drop_list");
        $(".theme_area").removeClass("show_drop_theme");
    });
    $('body').click(function (event) {
        if ($(".drop_menu_setting").hasClass("show_setting")) {
            if (!$(event.target).closest('.setting_area').length) {
                $(".drop_menu_setting").removeClass("show_setting");
            }
        }
    });


    //====== header icon toggler ======
    $(".header_icon").on("click", function () {
        $(".content_area").toggleClass("hide_text");
    });


    //====== header user js ======
    $(".user").on("click", function (event) {
        $(".drop_menu_user").toggleClass("show_setting");
        event.stopPropagation();
        $(".drop_menu_setting").removeClass("show_setting");

        $(".theme_area").removeClass("show_drop_theme");
        $(".drop_list").removeClass("show_drop_list");
    });
    $('body').click(function (event) {
        if ($(".drop_menu_user").hasClass("show_setting")) {
            if (!$(event.target).closest('.user_area').length) {
                $(".drop_menu_user").removeClass("show_setting");
            }
        }
    });


    //====== create modal js ======
    $(".create_note").on("click", function (event) {
        openModal();
        event.stopPropagation();
    });
    $(".single_note_content").on("click", function (event) {
        openModal();
        event.stopPropagation();
    });
    $(".cancel_modal").on("click", function (event) {
        $(".custom_modal_area").removeClass("show_modal");
        event.stopPropagation();
    });
    $('body').click(function (event) {
        if ($(".custom_modal_area").hasClass("show_modal")) {
            if (!$(event.target).closest('.custom_modal_content').length) {
                $(".custom_modal_area").removeClass("show_modal");
            }
        }
    });


    //====== modal dropdown list ======
    $(".modal_drop_list").on("click", function (event) {
        const $dropList = $(".drop_list");
        const $siblingsDropList = $(this).siblings(".drop_list");

        if ($dropList.hasClass("show_drop_list")) {
            if (!$siblingsDropList.hasClass('show_drop_list')) {
                $dropList.removeClass("show_drop_list");
            }
        }
        $siblingsDropList.toggleClass("show_drop_list");
        event.stopPropagation();
        $(".theme_area").removeClass("show_drop_theme");
        $(".drop_menu").removeClass("show_setting");
    });
    $('body').click(function (event) {
        if ($(".drop_list").hasClass("show_drop_list")) {
            if (!$(event.target).closest('.ions_area').length) {
                $(".drop_list").removeClass("show_drop_list");
            }
        }
    });


    //====== modal dropdown theme color ======
    $(".modal_drop_theme").on("click", function (event) {
        const $themeArea = $(".theme_area");
        const $siblingsThemeArea = $(this).siblings(".theme_area");

        if ($themeArea.hasClass("show_drop_theme")) {
            if ($siblingsThemeArea.hasClass('show_drop_theme')) {
            } else {
                $themeArea.removeClass("show_drop_theme");
            }
        }
        $siblingsThemeArea.toggleClass("show_drop_theme");
        event.stopPropagation();
        $(".drop_list").removeClass("show_drop_list");
        $(".drop_menu").removeClass("show_setting");
    });
    $('body').click(function (event) {
        if ($(".theme_area").hasClass("show_drop_theme")) {
            if (!$(event.target).closest('.ions_area').length) {
                $(".theme_area").removeClass("show_drop_theme");
            }
        }
    });
});

function openModal() {
    $(".custom_modal_area").addClass("show_modal");
    $(".drop_menu_user").removeClass("show_setting");
    $(".drop_menu_setting").removeClass("show_setting");
    $(".theme_area").removeClass("show_drop_theme");
    $(".drop_list").removeClass("show_drop_list");
};