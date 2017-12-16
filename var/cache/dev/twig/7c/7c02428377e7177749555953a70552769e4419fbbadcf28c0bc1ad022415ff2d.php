<?php

/* SyliusResourceBundle:Macros:buttons.html.twig */
class __TwigTemplate_42d1daa4046d15e560e87388ed52897387aab116a1bc9f4158944e879cbc7601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_236631559ac5bcce7e40b1e7e0892eda03f0351520c501d5c37f545f12e4082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236631559ac5bcce7e40b1e7e0892eda03f0351520c501d5c37f545f12e4082e->enter($__internal_236631559ac5bcce7e40b1e7e0892eda03f0351520c501d5c37f545f12e4082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:buttons.html.twig"));

        $__internal_a945ebe082eac9bc98baf06bbfc6a1bc016c5c742598e89f20bcac5b64000311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a945ebe082eac9bc98baf06bbfc6a1bc016c5c742598e89f20bcac5b64000311->enter($__internal_a945ebe082eac9bc98baf06bbfc6a1bc016c5c742598e89f20bcac5b64000311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:buttons.html.twig"));

        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 18
        echo "
";
        // line 24
        echo "
";
        // line 39
        echo "
";
        // line 45
        echo "
";
        // line 54
        echo "
";
        // line 63
        echo "
";
        // line 72
        echo "
";
        
        $__internal_236631559ac5bcce7e40b1e7e0892eda03f0351520c501d5c37f545f12e4082e->leave($__internal_236631559ac5bcce7e40b1e7e0892eda03f0351520c501d5c37f545f12e4082e_prof);

        
        $__internal_a945ebe082eac9bc98baf06bbfc6a1bc016c5c742598e89f20bcac5b64000311->leave($__internal_a945ebe082eac9bc98baf06bbfc6a1bc016c5c742598e89f20bcac5b64000311_prof);

    }

    // line 1
    public function macro_show($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1e829817c685d8ccede14deb24bb054b23832c5cc88f2b66d241557d010e6bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1e829817c685d8ccede14deb24bb054b23832c5cc88f2b66d241557d010e6bf0->enter($__internal_1e829817c685d8ccede14deb24bb054b23832c5cc88f2b66d241557d010e6bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            $__internal_15e310f5c447ee3e52edcf322e4d0459cf7dfd5d560e1432836eacefa2c4c2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_15e310f5c447ee3e52edcf322e4d0459cf7dfd5d560e1432836eacefa2c4c2a1->enter($__internal_15e310f5c447ee3e52edcf322e4d0459cf7dfd5d560e1432836eacefa2c4c2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>";
            // line 3
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 3, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 3, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_15e310f5c447ee3e52edcf322e4d0459cf7dfd5d560e1432836eacefa2c4c2a1->leave($__internal_15e310f5c447ee3e52edcf322e4d0459cf7dfd5d560e1432836eacefa2c4c2a1_prof);

            
            $__internal_1e829817c685d8ccede14deb24bb054b23832c5cc88f2b66d241557d010e6bf0->leave($__internal_1e829817c685d8ccede14deb24bb054b23832c5cc88f2b66d241557d010e6bf0_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_generic($__url__ = null, $__message__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_56b66943664c3cae7207be8c72487022f7a38014d6d54a6d3bc09751eb4becce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_56b66943664c3cae7207be8c72487022f7a38014d6d54a6d3bc09751eb4becce->enter($__internal_56b66943664c3cae7207be8c72487022f7a38014d6d54a6d3bc09751eb4becce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generic"));

            $__internal_d31e30423f99e71451d6e283a07ff77025325752fa3d0ad2007cbfc21529e26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d31e30423f99e71451d6e283a07ff77025325752fa3d0ad2007cbfc21529e26d->enter($__internal_d31e30423f99e71451d6e283a07ff77025325752fa3d0ad2007cbfc21529e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generic"));

            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-default\">
    ";
            // line 9
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 9, $this->getSourceContext()); })()))) {
                echo "<i class=\"glyphicon glyphicon-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>";
            }
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_d31e30423f99e71451d6e283a07ff77025325752fa3d0ad2007cbfc21529e26d->leave($__internal_d31e30423f99e71451d6e283a07ff77025325752fa3d0ad2007cbfc21529e26d_prof);

            
            $__internal_56b66943664c3cae7207be8c72487022f7a38014d6d54a6d3bc09751eb4becce->leave($__internal_56b66943664c3cae7207be8c72487022f7a38014d6d54a6d3bc09751eb4becce_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_create($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_22f14fa3b7e8366d3091b1c602696f66452be7411b6433647b7a5072cbebf614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_22f14fa3b7e8366d3091b1c602696f66452be7411b6433647b7a5072cbebf614->enter($__internal_22f14fa3b7e8366d3091b1c602696f66452be7411b6433647b7a5072cbebf614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_3c6fc99e395e88978caad718421eb11044bb0474c68c77eb4d4689367ed16883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3c6fc99e395e88978caad718421eb11044bb0474c68c77eb4d4689367ed16883->enter($__internal_3c6fc99e395e88978caad718421eb11044bb0474c68c77eb4d4689367ed16883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_3c6fc99e395e88978caad718421eb11044bb0474c68c77eb4d4689367ed16883->leave($__internal_3c6fc99e395e88978caad718421eb11044bb0474c68c77eb4d4689367ed16883_prof);

            
            $__internal_22f14fa3b7e8366d3091b1c602696f66452be7411b6433647b7a5072cbebf614->leave($__internal_22f14fa3b7e8366d3091b1c602696f66452be7411b6433647b7a5072cbebf614_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_edit($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a0e9e28621156154deda2cecc645451a736e11a8a59737e535c75dab02a352ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a0e9e28621156154deda2cecc645451a736e11a8a59737e535c75dab02a352ec->enter($__internal_a0e9e28621156154deda2cecc645451a736e11a8a59737e535c75dab02a352ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_23ccd6c138f768d9590915e16a81c0ef22826e0af737426ba5cb9511965ea82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_23ccd6c138f768d9590915e16a81c0ef22826e0af737426ba5cb9511965ea82d->enter($__internal_23ccd6c138f768d9590915e16a81c0ef22826e0af737426ba5cb9511965ea82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            // line 20
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>";
            // line 21
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 21, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 21, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_23ccd6c138f768d9590915e16a81c0ef22826e0af737426ba5cb9511965ea82d->leave($__internal_23ccd6c138f768d9590915e16a81c0ef22826e0af737426ba5cb9511965ea82d_prof);

            
            $__internal_a0e9e28621156154deda2cecc645451a736e11a8a59737e535c75dab02a352ec->leave($__internal_a0e9e28621156154deda2cecc645451a736e11a8a59737e535c75dab02a352ec_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_delete($__url__ = null, $__message__ = null, $__disabled__ = false, $__modal__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "disabled" => $__disabled__,
            "modal" => $__modal__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f13da0c999301b8acfd166c1516e0f247538839660a8d9caad0e718cc9be93c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f13da0c999301b8acfd166c1516e0f247538839660a8d9caad0e718cc9be93c0->enter($__internal_f13da0c999301b8acfd166c1516e0f247538839660a8d9caad0e718cc9be93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_ad0fbce32a40f9364b3be03e16bb68cc11d2f22b4aed8ce4be049bae7ac86991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ad0fbce32a40f9364b3be03e16bb68cc11d2f22b4aed8ce4be049bae7ac86991->enter($__internal_ad0fbce32a40f9364b3be03e16bb68cc11d2f22b4aed8ce4be049bae7ac86991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            // line 26
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 26, $this->getSourceContext()); })())) {
                // line 27
                echo "<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>";
                // line 28
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 28, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 28, $this->getSourceContext()); })()))), "html", null, true);
                echo "</span>
</span>
";
            } else {
                // line 31
                echo "<form action=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
                echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger";
                // line 33
                if ((isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new Twig_Error_Runtime('Variable "modal" does not exist.', 33, $this->getSourceContext()); })())) {
                    echo " btn-confirm";
                }
                echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>";
                // line 34
                echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 34, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 34, $this->getSourceContext()); })()))), "html", null, true);
                echo "</span>
    </button>
</form>
";
            }
            
            $__internal_ad0fbce32a40f9364b3be03e16bb68cc11d2f22b4aed8ce4be049bae7ac86991->leave($__internal_ad0fbce32a40f9364b3be03e16bb68cc11d2f22b4aed8ce4be049bae7ac86991_prof);

            
            $__internal_f13da0c999301b8acfd166c1516e0f247538839660a8d9caad0e718cc9be93c0->leave($__internal_f13da0c999301b8acfd166c1516e0f247538839660a8d9caad0e718cc9be93c0_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_manage($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_df4e6e529909237fbe85e1bcb8b683942052b808ad747443c34169827b35eed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_df4e6e529909237fbe85e1bcb8b683942052b808ad747443c34169827b35eed7->enter($__internal_df4e6e529909237fbe85e1bcb8b683942052b808ad747443c34169827b35eed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "manage"));

            $__internal_e83fcc9c64db441f0f3bed00d255d5aa3c24efabe369f500f82b826dbac8cb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e83fcc9c64db441f0f3bed00d255d5aa3c24efabe369f500f82b826dbac8cb61->enter($__internal_e83fcc9c64db441f0f3bed00d255d5aa3c24efabe369f500f82b826dbac8cb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "manage"));

            // line 41
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>";
            // line 42
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 42, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 42, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
</a>
";
            
            $__internal_e83fcc9c64db441f0f3bed00d255d5aa3c24efabe369f500f82b826dbac8cb61->leave($__internal_e83fcc9c64db441f0f3bed00d255d5aa3c24efabe369f500f82b826dbac8cb61_prof);

            
            $__internal_df4e6e529909237fbe85e1bcb8b683942052b808ad747443c34169827b35eed7->leave($__internal_df4e6e529909237fbe85e1bcb8b683942052b808ad747443c34169827b35eed7_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 46
    public function macro_move($__url__ = null, $__direction__ = null, $__first__ = false, $__last__ = false, $__message__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "direction" => $__direction__,
            "first" => $__first__,
            "last" => $__last__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_064eb21efdd332224515d0ca0f75f31f7b5a3fda8b1d37d5e5e7f8954274a4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_064eb21efdd332224515d0ca0f75f31f7b5a3fda8b1d37d5e5e7f8954274a4a8->enter($__internal_064eb21efdd332224515d0ca0f75f31f7b5a3fda8b1d37d5e5e7f8954274a4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "move"));

            $__internal_d53378189dfed7e8dba5402580822f51bd995a59cb4338ea3405adafe4527cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d53378189dfed7e8dba5402580822f51bd995a59cb4338ea3405adafe4527cb1->enter($__internal_d53378189dfed7e8dba5402580822f51bd995a59cb4338ea3405adafe4527cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "move"));

            // line 47
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"";
            // line 49
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 49, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui.move_" . (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new Twig_Error_Runtime('Variable "direction" does not exist.', 49, $this->getSourceContext()); })())))) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 49, $this->getSourceContext()); })()))), "html", null, true);
            echo "\" class=\"btn btn-default ";
            if (((("up" == (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new Twig_Error_Runtime('Variable "direction" does not exist.', 49, $this->getSourceContext()); })())) && (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 49, $this->getSourceContext()); })())) || (("down" == (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new Twig_Error_Runtime('Variable "direction" does not exist.', 49, $this->getSourceContext()); })())) && (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 49, $this->getSourceContext()); })())))) {
                echo "disabled";
            }
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new Twig_Error_Runtime('Variable "direction" does not exist.', 50, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></i>
    </button>
</form>
";
            
            $__internal_d53378189dfed7e8dba5402580822f51bd995a59cb4338ea3405adafe4527cb1->leave($__internal_d53378189dfed7e8dba5402580822f51bd995a59cb4338ea3405adafe4527cb1_prof);

            
            $__internal_064eb21efdd332224515d0ca0f75f31f7b5a3fda8b1d37d5e5e7f8954274a4a8->leave($__internal_064eb21efdd332224515d0ca0f75f31f7b5a3fda8b1d37d5e5e7f8954274a4a8_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_patch($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_edbfa78ce137a83b6527ab2f0aafae1453c7132bc5a1336c15223a591e083127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_edbfa78ce137a83b6527ab2f0aafae1453c7132bc5a1336c15223a591e083127->enter($__internal_edbfa78ce137a83b6527ab2f0aafae1453c7132bc5a1336c15223a591e083127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "patch"));

            $__internal_77ab3f95daaccf6ad92e8f4b2e2ed5cd493f7a854774332e740c132b284f4cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_77ab3f95daaccf6ad92e8f4b2e2ed5cd493f7a854774332e740c132b284f4cf5->enter($__internal_77ab3f95daaccf6ad92e8f4b2e2ed5cd493f7a854774332e740c132b284f4cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "patch"));

            // line 56
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 56, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 58
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new Twig_Error_Runtime('Variable "button" does not exist.', 58, $this->getSourceContext()); })()), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 59
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 59, $this->getSourceContext()); })()), "transfer")) : ("transfer")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 59, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_77ab3f95daaccf6ad92e8f4b2e2ed5cd493f7a854774332e740c132b284f4cf5->leave($__internal_77ab3f95daaccf6ad92e8f4b2e2ed5cd493f7a854774332e740c132b284f4cf5_prof);

            
            $__internal_edbfa78ce137a83b6527ab2f0aafae1453c7132bc5a1336c15223a591e083127->leave($__internal_edbfa78ce137a83b6527ab2f0aafae1453c7132bc5a1336c15223a591e083127_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 64
    public function macro_enable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4ceb0c274bc8b899c67ee684918d99eb59074a35080c7df9ebad93199955045f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4ceb0c274bc8b899c67ee684918d99eb59074a35080c7df9ebad93199955045f->enter($__internal_4ceb0c274bc8b899c67ee684918d99eb59074a35080c7df9ebad93199955045f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enable"));

            $__internal_06c3ae00cce0df702f8894382dead411ad0ed6fde5ff93c00a7ad76de0ae543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_06c3ae00cce0df702f8894382dead411ad0ed6fde5ff93c00a7ad76de0ae543f->enter($__internal_06c3ae00cce0df702f8894382dead411ad0ed6fde5ff93c00a7ad76de0ae543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "enable"));

            // line 65
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 67
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new Twig_Error_Runtime('Variable "button" does not exist.', 67, $this->getSourceContext()); })()), "success")) : ("success")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 68
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 68, $this->getSourceContext()); })()), "ok")) : ("ok")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 68, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.enable")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 68, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_06c3ae00cce0df702f8894382dead411ad0ed6fde5ff93c00a7ad76de0ae543f->leave($__internal_06c3ae00cce0df702f8894382dead411ad0ed6fde5ff93c00a7ad76de0ae543f_prof);

            
            $__internal_4ceb0c274bc8b899c67ee684918d99eb59074a35080c7df9ebad93199955045f->leave($__internal_4ceb0c274bc8b899c67ee684918d99eb59074a35080c7df9ebad93199955045f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_disable($__url__ = null, $__message__ = null, $__icon__ = null, $__button__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "icon" => $__icon__,
            "button" => $__button__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cc3cf4566a9c70f31fdd91339f31924d8c15001e32d7248eb1fbbc55f1d28e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cc3cf4566a9c70f31fdd91339f31924d8c15001e32d7248eb1fbbc55f1d28e38->enter($__internal_cc3cf4566a9c70f31fdd91339f31924d8c15001e32d7248eb1fbbc55f1d28e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disable"));

            $__internal_988942246bd2b43b5217526131fd1ec249f9a64cc94227e167de008b1de5370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_988942246bd2b43b5217526131fd1ec249f9a64cc94227e167de008b1de5370d->enter($__internal_988942246bd2b43b5217526131fd1ec249f9a64cc94227e167de008b1de5370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "disable"));

            // line 74
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-";
            // line 76
            echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new Twig_Error_Runtime('Variable "button" does not exist.', 76, $this->getSourceContext()); })()), "danger")) : ("danger")), "html", null, true);
            echo "\" type=\"submit\">
        <i class=\"glyphicon glyphicon-";
            // line 77
            echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 77, $this->getSourceContext()); })()), "remove")) : ("remove")), "html", null, true);
            echo "\"></i> <span>";
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 77, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.disable")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 77, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
    </button>
</form>
";
            
            $__internal_988942246bd2b43b5217526131fd1ec249f9a64cc94227e167de008b1de5370d->leave($__internal_988942246bd2b43b5217526131fd1ec249f9a64cc94227e167de008b1de5370d_prof);

            
            $__internal_cc3cf4566a9c70f31fdd91339f31924d8c15001e32d7248eb1fbbc55f1d28e38->leave($__internal_cc3cf4566a9c70f31fdd91339f31924d8c15001e32d7248eb1fbbc55f1d28e38_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  531 => 77,  527 => 76,  521 => 74,  500 => 73,  479 => 68,  475 => 67,  469 => 65,  448 => 64,  427 => 59,  423 => 58,  417 => 56,  396 => 55,  377 => 50,  369 => 49,  363 => 47,  341 => 46,  323 => 42,  318 => 41,  299 => 40,  279 => 34,  273 => 33,  267 => 31,  261 => 28,  258 => 27,  256 => 26,  235 => 25,  217 => 21,  212 => 20,  193 => 19,  175 => 15,  170 => 14,  151 => 13,  127 => 9,  122 => 8,  102 => 7,  84 => 3,  79 => 2,  60 => 1,  49 => 72,  46 => 63,  43 => 54,  40 => 45,  37 => 39,  34 => 24,  31 => 18,  28 => 12,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro show(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
   <i class=\"glyphicon glyphicon-book\"></i><span>{{ message is empty ? 'sylius.ui.details'|trans : message }}</span>
</a>
{% endmacro %}

{% macro generic(url, message, icon) %}
<a href=\"{{ url }}\" class=\"btn btn-default\">
    {% if icon is not empty %}<i class=\"glyphicon glyphicon-{{ icon }}\"></i>{% endif %}<span>{{ message }}</span>
</a>
{% endmacro %}

{% macro create(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-plus-sign\"></i><span>{{ message is empty ? 'sylius.ui.create'|trans : message }}</span>
</a>
{% endmacro %}

{% macro edit(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-primary\">
    <i class=\"glyphicon glyphicon-pencil\"></i><span>{{ message is empty ? 'sylius.ui.edit'|trans : message }}</span>
</a>
{% endmacro %}

{% macro delete(url, message, disabled=false, modal=true) %}
{% if disabled %}
<span class=\"btn btn-danger disabled\">
    <i class=\"glyphicon glyphicon-trash\"></i><span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
</span>
{% else %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger{% if modal %} btn-confirm{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-trash\"></i> <span>{{ message is empty ? 'sylius.ui.delete'|trans : message }}</span>
    </button>
</form>
{% endif %}
{% endmacro %}

{% macro manage(url, message) %}
<a href=\"{{ url }}\" class=\"btn btn-success\">
    <i class=\"glyphicon glyphicon-folder-open\"></i><span>{{ message is empty ? 'sylius.ui.manage'|trans : message }}</span>
</a>
{% endmacro %}

{% macro move(url, direction, first=false, last=false, message='') %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    <button title=\"{{ message is empty ? ('sylius.ui.move_'~direction)|trans : message }}\" class=\"btn btn-default {% if ('up' == direction and first) or ('down' == direction and last) %}disabled{% endif %}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-arrow-{{ direction }}\"></i>
    </button>
</form>
{% endmacro %}

{% macro patch(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('transfer') }}\"></i> <span>{{ message }}</span>
    </button>
</form>
{% endmacro %}

{% macro enable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('success') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('ok') }}\"></i> <span>{{ message is empty ? 'sylius.ui.enable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}

{% macro disable(url, message, icon, button) %}
<form action=\"{{ url }}\" method=\"post\" class=\"delete-action-form\" novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <button class=\"btn btn-{{ button|default('danger') }}\" type=\"submit\">
        <i class=\"glyphicon glyphicon-{{ icon|default('remove') }}\"></i> <span>{{ message is empty ? 'sylius.ui.disable'|trans : message }}</span>
    </button>
</form>
{% endmacro %}
", "SyliusResourceBundle:Macros:buttons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/Macros/buttons.html.twig");
    }
}
