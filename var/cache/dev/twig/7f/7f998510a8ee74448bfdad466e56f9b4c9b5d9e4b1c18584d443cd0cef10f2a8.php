<?php

/* SyliusUiBundle:Macro:buttons.html.twig */
class __TwigTemplate_1ef236f5e1dcbd453c7823f150aead2561dd13d844420cb37c49fa6e3d97a23d extends Twig_Template
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
        $__internal_d191a5798d7f27918885db2d88bd50e001dde13cb1167a3eabfbceefff4ad361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d191a5798d7f27918885db2d88bd50e001dde13cb1167a3eabfbceefff4ad361->enter($__internal_d191a5798d7f27918885db2d88bd50e001dde13cb1167a3eabfbceefff4ad361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        $__internal_e7d06bc49500218f926d099dfb398d1edd10a78e7fbc37f60a2d10b65c7d4a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d06bc49500218f926d099dfb398d1edd10a78e7fbc37f60a2d10b65c7d4a16->enter($__internal_e7d06bc49500218f926d099dfb398d1edd10a78e7fbc37f60a2d10b65c7d4a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
        // line 47
        echo "
";
        // line 53
        echo "
";
        
        $__internal_d191a5798d7f27918885db2d88bd50e001dde13cb1167a3eabfbceefff4ad361->leave($__internal_d191a5798d7f27918885db2d88bd50e001dde13cb1167a3eabfbceefff4ad361_prof);

        
        $__internal_e7d06bc49500218f926d099dfb398d1edd10a78e7fbc37f60a2d10b65c7d4a16->leave($__internal_e7d06bc49500218f926d099dfb398d1edd10a78e7fbc37f60a2d10b65c7d4a16_prof);

    }

    // line 1
    public function macro_default($__url__ = null, $__message__ = null, $__id__ = null, $__icon__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9f3b81fff637be6e222a13db10dc6da3a09044281c5ec0ca34e7777a091d84c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9f3b81fff637be6e222a13db10dc6da3a09044281c5ec0ca34e7777a091d84c4->enter($__internal_9f3b81fff637be6e222a13db10dc6da3a09044281c5ec0ca34e7777a091d84c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_26b9f89d3f88beabd8337a55c8cb2d79d13d2ae57c2d7850960fb5ae31e68492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_26b9f89d3f88beabd8337a55c8cb2d79d13d2ae57c2d7850960fb5ae31e68492->enter($__internal_26b9f89d3f88beabd8337a55c8cb2d79d13d2ae57c2d7850960fb5ae31e68492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <a class=\"ui ";
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo "labeled ";
            }
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo "icon ";
            }
            echo "button ";
            if ( !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
                echo " ";
            }
            echo "\" ";
            if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
            // line 3
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()))) {
                // line 4
                echo "            <i class=\"icon ";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 6
            echo "        ";
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })()))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })())), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";
            
            $__internal_26b9f89d3f88beabd8337a55c8cb2d79d13d2ae57c2d7850960fb5ae31e68492->leave($__internal_26b9f89d3f88beabd8337a55c8cb2d79d13d2ae57c2d7850960fb5ae31e68492_prof);

            
            $__internal_9f3b81fff637be6e222a13db10dc6da3a09044281c5ec0ca34e7777a091d84c4->leave($__internal_9f3b81fff637be6e222a13db10dc6da3a09044281c5ec0ca34e7777a091d84c4_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_show($__url__ = null, $__message__ = null, $__id__ = null, $__class__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "class" => $__class__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_db1a09d4024db56b149f679f07376024a4f3e45386b226d467e72d235c97e99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_db1a09d4024db56b149f679f07376024a4f3e45386b226d467e72d235c97e99f->enter($__internal_db1a09d4024db56b149f679f07376024a4f3e45386b226d467e72d235c97e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            $__internal_4c9a41c819a770a3568d52dd1c215ce950a516288d8e3577444abc46fd60e530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4c9a41c819a770a3568d52dd1c215ce950a516288d8e3577444abc46fd60e530->enter($__internal_4c9a41c819a770a3568d52dd1c215ce950a516288d8e3577444abc46fd60e530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            // line 13
            echo "    ";
            $context["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 15, $this->getSourceContext()); })()))) {
                // line 16
                echo "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 19, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 19, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->getSourceContext()); })()), "search");
            echo "
";
            
            $__internal_4c9a41c819a770a3568d52dd1c215ce950a516288d8e3577444abc46fd60e530->leave($__internal_4c9a41c819a770a3568d52dd1c215ce950a516288d8e3577444abc46fd60e530_prof);

            
            $__internal_db1a09d4024db56b149f679f07376024a4f3e45386b226d467e72d235c97e99f->leave($__internal_db1a09d4024db56b149f679f07376024a4f3e45386b226d467e72d235c97e99f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_create($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a6e297ba13d35ce0e070faa0fd5c013b98ac1c4eec2c2827375ef9a70de8f885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a6e297ba13d35ce0e070faa0fd5c013b98ac1c4eec2c2827375ef9a70de8f885->enter($__internal_a6e297ba13d35ce0e070faa0fd5c013b98ac1c4eec2c2827375ef9a70de8f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_6f153101d4a1747e9bac54d5a33ba2202b213caa29599f19f3d68ce6be31637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6f153101d4a1747e9bac54d5a33ba2202b213caa29599f19f3d68ce6be31637a->enter($__internal_6f153101d4a1747e9bac54d5a33ba2202b213caa29599f19f3d68ce6be31637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 23
            echo "    ";
            $context["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 25, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 25, $this->getSourceContext()); })()))) {
                // line 26
                echo "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 29, $this->getSourceContext()); })()), "plus", "primary");
            echo "
";
            
            $__internal_6f153101d4a1747e9bac54d5a33ba2202b213caa29599f19f3d68ce6be31637a->leave($__internal_6f153101d4a1747e9bac54d5a33ba2202b213caa29599f19f3d68ce6be31637a_prof);

            
            $__internal_a6e297ba13d35ce0e070faa0fd5c013b98ac1c4eec2c2827375ef9a70de8f885->leave($__internal_a6e297ba13d35ce0e070faa0fd5c013b98ac1c4eec2c2827375ef9a70de8f885_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_edit($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e1c48d80f6084bd3f8a1e63a259fbeeca82099481f84c22201c88c3dc670572a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e1c48d80f6084bd3f8a1e63a259fbeeca82099481f84c22201c88c3dc670572a->enter($__internal_e1c48d80f6084bd3f8a1e63a259fbeeca82099481f84c22201c88c3dc670572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_d9e6634cef1ca82b042b87e3992f77fe538f31f8ae75f225b567db078ec3a294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_d9e6634cef1ca82b042b87e3992f77fe538f31f8ae75f225b567db078ec3a294->enter($__internal_d9e6634cef1ca82b042b87e3992f77fe538f31f8ae75f225b567db078ec3a294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 35, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 35, $this->getSourceContext()); })()))) {
                // line 36
                echo "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 39, $this->getSourceContext()); })()), "pencil");
            echo "
";
            
            $__internal_d9e6634cef1ca82b042b87e3992f77fe538f31f8ae75f225b567db078ec3a294->leave($__internal_d9e6634cef1ca82b042b87e3992f77fe538f31f8ae75f225b567db078ec3a294_prof);

            
            $__internal_e1c48d80f6084bd3f8a1e63a259fbeeca82099481f84c22201c88c3dc670572a->leave($__internal_e1c48d80f6084bd3f8a1e63a259fbeeca82099481f84c22201c88c3dc670572a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_filter($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_294fcee6b4f59e96d8992df2b7a214786d26555b167e12276cc30a138584da84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_294fcee6b4f59e96d8992df2b7a214786d26555b167e12276cc30a138584da84->enter($__internal_294fcee6b4f59e96d8992df2b7a214786d26555b167e12276cc30a138584da84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            $__internal_26ba77ef0a4fba96ebb24b241e183bc41c7a0cde828bd592be585407b26f7991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_26ba77ef0a4fba96ebb24b241e183bc41c7a0cde828bd592be585407b26f7991->enter($__internal_26ba77ef0a4fba96ebb24b241e183bc41c7a0cde828bd592be585407b26f7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            // line 43
            echo "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 44, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.filter")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 44, $this->getSourceContext()); })()))), "html", null, true);
            echo "
    </button>
";
            
            $__internal_26ba77ef0a4fba96ebb24b241e183bc41c7a0cde828bd592be585407b26f7991->leave($__internal_26ba77ef0a4fba96ebb24b241e183bc41c7a0cde828bd592be585407b26f7991_prof);

            
            $__internal_294fcee6b4f59e96d8992df2b7a214786d26555b167e12276cc30a138584da84->leave($__internal_294fcee6b4f59e96d8992df2b7a214786d26555b167e12276cc30a138584da84_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_resetFilters($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_292d5401e63a0258f519b1a51039e7d48de9af194fae79af0fab5e12deccd173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_292d5401e63a0258f519b1a51039e7d48de9af194fae79af0fab5e12deccd173->enter($__internal_292d5401e63a0258f519b1a51039e7d48de9af194fae79af0fab5e12deccd173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            $__internal_8d91145c4a5f3d4a4a83446f59a5090be69f50ef6b78f44321dc7cbb8d39641b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8d91145c4a5f3d4a4a83446f59a5090be69f50ef6b78f44321dc7cbb8d39641b->enter($__internal_8d91145c4a5f3d4a4a83446f59a5090be69f50ef6b78f44321dc7cbb8d39641b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            // line 49
            echo "    <a class=\"ui labeled icon button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 50, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear_filters")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 50, $this->getSourceContext()); })()))), "html", null, true);
            echo "
    </a>
";
            
            $__internal_8d91145c4a5f3d4a4a83446f59a5090be69f50ef6b78f44321dc7cbb8d39641b->leave($__internal_8d91145c4a5f3d4a4a83446f59a5090be69f50ef6b78f44321dc7cbb8d39641b_prof);

            
            $__internal_292d5401e63a0258f519b1a51039e7d48de9af194fae79af0fab5e12deccd173->leave($__internal_292d5401e63a0258f519b1a51039e7d48de9af194fae79af0fab5e12deccd173_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_delete($__url__ = null, $__message__ = null, $__labeled__ = true, $__resourceId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "resourceId" => $__resourceId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2baba51593eaa5e6ed2534d4a7f365fdac78f1145603bce1cb6edff0465b6659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2baba51593eaa5e6ed2534d4a7f365fdac78f1145603bce1cb6edff0465b6659->enter($__internal_2baba51593eaa5e6ed2534d4a7f365fdac78f1145603bce1cb6edff0465b6659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_cd8c379f2e14490398215f7cddb6f48c4e3e97b9d6ec5f0ed4f3b6ade99b0366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cd8c379f2e14490398215f7cddb6f48c4e3e97b9d6ec5f0ed4f3b6ade99b0366->enter($__internal_cd8c379f2e14490398215f7cddb6f48c4e3e97b9d6ec5f0ed4f3b6ade99b0366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            // line 55
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 55, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if ((isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 57, $this->getSourceContext()); })())) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, (((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 58, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 58, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 58, $this->getSourceContext()); })()))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken((isset($context["resourceId"]) || array_key_exists("resourceId", $context) ? $context["resourceId"] : (function () { throw new Twig_Error_Runtime('Variable "resourceId" does not exist.', 60, $this->getSourceContext()); })())), "html", null, true);
            echo "\" />
    </form>
";
            
            $__internal_cd8c379f2e14490398215f7cddb6f48c4e3e97b9d6ec5f0ed4f3b6ade99b0366->leave($__internal_cd8c379f2e14490398215f7cddb6f48c4e3e97b9d6ec5f0ed4f3b6ade99b0366_prof);

            
            $__internal_2baba51593eaa5e6ed2534d4a7f365fdac78f1145603bce1cb6edff0465b6659->leave($__internal_2baba51593eaa5e6ed2534d4a7f365fdac78f1145603bce1cb6edff0465b6659_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 60,  410 => 58,  404 => 57,  398 => 55,  377 => 54,  359 => 50,  354 => 49,  335 => 48,  317 => 44,  314 => 43,  296 => 42,  279 => 39,  276 => 38,  273 => 37,  270 => 36,  268 => 35,  265 => 34,  262 => 33,  241 => 32,  224 => 29,  221 => 28,  218 => 27,  215 => 26,  213 => 25,  210 => 24,  207 => 23,  186 => 22,  169 => 19,  166 => 18,  163 => 17,  160 => 16,  158 => 15,  155 => 14,  152 => 13,  130 => 12,  114 => 9,  108 => 7,  105 => 6,  99 => 4,  97 => 3,  73 => 2,  51 => 1,  40 => 53,  37 => 47,  34 => 41,  31 => 31,  28 => 21,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(url, message, id, icon, class) %}
    <a class=\"ui {% if message is not empty %}labeled {% endif %}{% if icon is not empty %}icon {% endif %}button {% if class is not empty %} {{ class }} {% endif %}\" {% if id is not null %} id=\"{{ id }}\"{% endif %} href=\"{{ url }}\">
        {% if icon is not empty %}
            <i class=\"icon {{ icon }}\"></i>
        {% endif %}
        {% if message is not empty %}
            {{ message|trans }}
        {% endif %}
    </a>
{% endmacro %}

{% macro show(url, message, id, class, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.show' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'search') }}
{% endmacro %}

{% macro create(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.create' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'plus', 'primary') }}
{% endmacro %}

{% macro edit(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.edit' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'pencil') }}
{% endmacro %}

{% macro filter(message) %}
    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> {{ message is empty ? 'sylius.ui.filter'|trans : message }}
    </button>
{% endmacro %}

{% macro resetFilters(url, message) %}
    <a class=\"ui labeled icon button\" href=\"{{ url }}\">
        <i class=\"icon remove\"></i> {{ message is empty ? 'sylius.ui.clear_filters'|trans : message }}
    </a>
{% endmacro %}

{% macro delete(url, message, labeled = true, resourceId = null) %}
    <form action=\"{{ url }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red {% if labeled %}labeled {% endif %}icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> {{ (message is empty and labeled) ? 'sylius.ui.delete'|trans : message }}
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(resourceId) }}\" />
    </form>
{% endmacro %}
", "SyliusUiBundle:Macro:buttons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/buttons.html.twig");
    }
}
