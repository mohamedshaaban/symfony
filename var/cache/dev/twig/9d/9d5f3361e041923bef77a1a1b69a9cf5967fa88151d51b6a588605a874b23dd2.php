<?php

/* SyliusResourceBundle:Macros:notification.html.twig */
class __TwigTemplate_d8cd4c510bef1af3c0e40138a46c75390c2b26943058e191582670d080ca9cf0 extends Twig_Template
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
        $__internal_c84be72edec9af2574b8b2fb383cc0b6209bf4eb9868030d5c0b51ec8b8b79dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84be72edec9af2574b8b2fb383cc0b6209bf4eb9868030d5c0b51ec8b8b79dd->enter($__internal_c84be72edec9af2574b8b2fb383cc0b6209bf4eb9868030d5c0b51ec8b8b79dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        $__internal_2659520dd887375fcab68a3408baad047cad7e98398b39e64ad20aa49221234a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2659520dd887375fcab68a3408baad047cad7e98398b39e64ad20aa49221234a->enter($__internal_2659520dd887375fcab68a3408baad047cad7e98398b39e64ad20aa49221234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        // line 13
        echo "

";
        // line 41
        echo "
";
        // line 46
        echo "
";
        // line 51
        echo "
";
        // line 56
        echo "
";
        // line 61
        echo "
";
        
        $__internal_c84be72edec9af2574b8b2fb383cc0b6209bf4eb9868030d5c0b51ec8b8b79dd->leave($__internal_c84be72edec9af2574b8b2fb383cc0b6209bf4eb9868030d5c0b51ec8b8b79dd_prof);

        
        $__internal_2659520dd887375fcab68a3408baad047cad7e98398b39e64ad20aa49221234a->leave($__internal_2659520dd887375fcab68a3408baad047cad7e98398b39e64ad20aa49221234a_prof);

    }

    // line 2
    public function macro_flashes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d949b9a2794c1a195f35d23035f8e3610d5d4abffca6cd9a0c3b35461b5a2971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d949b9a2794c1a195f35d23035f8e3610d5d4abffca6cd9a0c3b35461b5a2971->enter($__internal_d949b9a2794c1a195f35d23035f8e3610d5d4abffca6cd9a0c3b35461b5a2971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            $__internal_b3f6ae59e88c462a0a785bb89f181b45c1c6dc68f1bee9c84010ea6023185fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b3f6ae59e88c462a0a785bb89f181b45c1c6dc68f1bee9c84010ea6023185fe3->enter($__internal_b3f6ae59e88c462a0a785bb89f181b45c1c6dc68f1bee9c84010ea6023185fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 4
                echo "        <div id=\"flashesMessage\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            <ul class=\"list-unstyled\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 7
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "            </ul>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_b3f6ae59e88c462a0a785bb89f181b45c1c6dc68f1bee9c84010ea6023185fe3->leave($__internal_b3f6ae59e88c462a0a785bb89f181b45c1c6dc68f1bee9c84010ea6023185fe3_prof);

            
            $__internal_d949b9a2794c1a195f35d23035f8e3610d5d4abffca6cd9a0c3b35461b5a2971->leave($__internal_d949b9a2794c1a195f35d23035f8e3610d5d4abffca6cd9a0c3b35461b5a2971_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_alert($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7582f2821ccbe24cc047adad79f58a19a2c52266247b0e9bf3ef7e782ed1078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7582f2821ccbe24cc047adad79f58a19a2c52266247b0e9bf3ef7e782ed1078e->enter($__internal_7582f2821ccbe24cc047adad79f58a19a2c52266247b0e9bf3ef7e782ed1078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_5488a40444a293141a54b85209043da9858d783a4a779a67c63065ff07ff6b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5488a40444a293141a54b85209043da9858d783a4a779a67c63065ff07ff6b13->enter($__internal_5488a40444a293141a54b85209043da9858d783a4a779a67c63065ff07ff6b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            // line 21
            echo "    ";
            $context["type"] = ("alert-" . ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 21, $this->getSourceContext()); })()), "info")) : ("info")));
            // line 22
            echo "
    ";
            // line 23
            if (((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 23, $this->getSourceContext()); })()))) : (""))) {
                // line 24
                echo "    <div class=\"alert ";
                echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
        ";
                // line 25
                if (twig_test_iterable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 25, $this->getSourceContext()); })()))) {
                    // line 26
                    echo "            <ul class=\"form-type-errors list-unstyled\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 27, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 28
                        echo "                    <li>
                        <p class=\"text-";
                        // line 29
                        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                        echo "\">
                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], "messageParameters", array())), "html", null, true);
                        echo "
                        </p>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "            </ul>
        ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 36, $this->getSourceContext()); })())), "html", null, true);
                    echo "
        ";
                }
                // line 38
                echo "    </div>
    ";
            }
            
            $__internal_5488a40444a293141a54b85209043da9858d783a4a779a67c63065ff07ff6b13->leave($__internal_5488a40444a293141a54b85209043da9858d783a4a779a67c63065ff07ff6b13_prof);

            
            $__internal_7582f2821ccbe24cc047adad79f58a19a2c52266247b0e9bf3ef7e782ed1078e->leave($__internal_7582f2821ccbe24cc047adad79f58a19a2c52266247b0e9bf3ef7e782ed1078e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_danger($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2a45d90c3354ec98271fbe381e78ed2a9643105542cb970e25ad6e1664885343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2a45d90c3354ec98271fbe381e78ed2a9643105542cb970e25ad6e1664885343->enter($__internal_2a45d90c3354ec98271fbe381e78ed2a9643105542cb970e25ad6e1664885343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            $__internal_0d4f597643fa69b43c58ee9f915c7e558e7d847d7cfe83eeffe967ca9d555272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0d4f597643fa69b43c58ee9f915c7e558e7d847d7cfe83eeffe967ca9d555272->enter($__internal_0d4f597643fa69b43c58ee9f915c7e558e7d847d7cfe83eeffe967ca9d555272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            // line 43
            echo "    ";
            $context["__internal_4cc950a9cf81931f64bfbc1e20d34a5fccebb13fa874c4bde5e9b288d4647f47"] = $this;
            // line 44
            echo "    ";
            echo $context["__internal_4cc950a9cf81931f64bfbc1e20d34a5fccebb13fa874c4bde5e9b288d4647f47"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 44, $this->getSourceContext()); })()), "danger");
            echo "
";
            
            $__internal_0d4f597643fa69b43c58ee9f915c7e558e7d847d7cfe83eeffe967ca9d555272->leave($__internal_0d4f597643fa69b43c58ee9f915c7e558e7d847d7cfe83eeffe967ca9d555272_prof);

            
            $__internal_2a45d90c3354ec98271fbe381e78ed2a9643105542cb970e25ad6e1664885343->leave($__internal_2a45d90c3354ec98271fbe381e78ed2a9643105542cb970e25ad6e1664885343_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_error($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_27739ae345ae5e88c68589e273717879a0ab90547d1f6fdf860869c3cf0449a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_27739ae345ae5e88c68589e273717879a0ab90547d1f6fdf860869c3cf0449a4->enter($__internal_27739ae345ae5e88c68589e273717879a0ab90547d1f6fdf860869c3cf0449a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_4cb7d0ee4df898b344b1b4180141b222fc26f442007c2e84e03c426508174083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_4cb7d0ee4df898b344b1b4180141b222fc26f442007c2e84e03c426508174083->enter($__internal_4cb7d0ee4df898b344b1b4180141b222fc26f442007c2e84e03c426508174083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 48
            echo "    ";
            $context["__internal_4b30b9da0f4a0bab4be89de16e20723accf2dbc6dab318194b6edfe07aa506e1"] = $this;
            // line 49
            echo "    ";
            echo $context["__internal_4b30b9da0f4a0bab4be89de16e20723accf2dbc6dab318194b6edfe07aa506e1"]->macro_danger((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 49, $this->getSourceContext()); })()));
            echo "
";
            
            $__internal_4cb7d0ee4df898b344b1b4180141b222fc26f442007c2e84e03c426508174083->leave($__internal_4cb7d0ee4df898b344b1b4180141b222fc26f442007c2e84e03c426508174083_prof);

            
            $__internal_27739ae345ae5e88c68589e273717879a0ab90547d1f6fdf860869c3cf0449a4->leave($__internal_27739ae345ae5e88c68589e273717879a0ab90547d1f6fdf860869c3cf0449a4_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_warning($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_532fcb197124d7de2ee500d5e778c8efd736ba09bedda959a19c2e8035ff95b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_532fcb197124d7de2ee500d5e778c8efd736ba09bedda959a19c2e8035ff95b9->enter($__internal_532fcb197124d7de2ee500d5e778c8efd736ba09bedda959a19c2e8035ff95b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            $__internal_067f795a46c62879c2c8d9bae1212717779764a298308c70b47bd607ec78e790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_067f795a46c62879c2c8d9bae1212717779764a298308c70b47bd607ec78e790->enter($__internal_067f795a46c62879c2c8d9bae1212717779764a298308c70b47bd607ec78e790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            // line 53
            echo "    ";
            $context["__internal_0150f4cce667717652da580c61a7d969394967c83b9de3dc8fed8a7d9f0939ed"] = $this;
            // line 54
            echo "    ";
            echo $context["__internal_0150f4cce667717652da580c61a7d969394967c83b9de3dc8fed8a7d9f0939ed"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 54, $this->getSourceContext()); })()), "warning");
            echo "
";
            
            $__internal_067f795a46c62879c2c8d9bae1212717779764a298308c70b47bd607ec78e790->leave($__internal_067f795a46c62879c2c8d9bae1212717779764a298308c70b47bd607ec78e790_prof);

            
            $__internal_532fcb197124d7de2ee500d5e778c8efd736ba09bedda959a19c2e8035ff95b9->leave($__internal_532fcb197124d7de2ee500d5e778c8efd736ba09bedda959a19c2e8035ff95b9_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 57
    public function macro_success($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d386d8ce4bf89b25e1abf56d28d498fd8598500cd51f06430f1553a1ae87ea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d386d8ce4bf89b25e1abf56d28d498fd8598500cd51f06430f1553a1ae87ea28->enter($__internal_d386d8ce4bf89b25e1abf56d28d498fd8598500cd51f06430f1553a1ae87ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_6b776644f862282bac3fa0c5ffb5877ced0051d234725b7127b960c78bc354df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6b776644f862282bac3fa0c5ffb5877ced0051d234725b7127b960c78bc354df->enter($__internal_6b776644f862282bac3fa0c5ffb5877ced0051d234725b7127b960c78bc354df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 58
            echo "    ";
            $context["__internal_182ebdf0b39276fcba4e1bbf743cb9a871d73b14dcc180037e536419e92f325c"] = $this;
            // line 59
            echo "    ";
            echo $context["__internal_182ebdf0b39276fcba4e1bbf743cb9a871d73b14dcc180037e536419e92f325c"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 59, $this->getSourceContext()); })()), "success");
            echo "
";
            
            $__internal_6b776644f862282bac3fa0c5ffb5877ced0051d234725b7127b960c78bc354df->leave($__internal_6b776644f862282bac3fa0c5ffb5877ced0051d234725b7127b960c78bc354df_prof);

            
            $__internal_d386d8ce4bf89b25e1abf56d28d498fd8598500cd51f06430f1553a1ae87ea28->leave($__internal_d386d8ce4bf89b25e1abf56d28d498fd8598500cd51f06430f1553a1ae87ea28_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_info($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4f4e865149c922f31dd08952bfe67ade8261cf71f9bb8ef8ac791fdef9c2d008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4f4e865149c922f31dd08952bfe67ade8261cf71f9bb8ef8ac791fdef9c2d008->enter($__internal_4f4e865149c922f31dd08952bfe67ade8261cf71f9bb8ef8ac791fdef9c2d008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_cf204526cd8567ffa259c83665182df987b8a10cc3e4a9a04de53edfa6f1cd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cf204526cd8567ffa259c83665182df987b8a10cc3e4a9a04de53edfa6f1cd0e->enter($__internal_cf204526cd8567ffa259c83665182df987b8a10cc3e4a9a04de53edfa6f1cd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 63
            echo "    ";
            $context["__internal_c190c3058dcf3572c076e3f4ac9d8af02b65f7eec0d2fc98463d1ef5369df45b"] = $this;
            // line 64
            echo "    ";
            echo $context["__internal_c190c3058dcf3572c076e3f4ac9d8af02b65f7eec0d2fc98463d1ef5369df45b"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 64, $this->getSourceContext()); })()), "info");
            echo "
";
            
            $__internal_cf204526cd8567ffa259c83665182df987b8a10cc3e4a9a04de53edfa6f1cd0e->leave($__internal_cf204526cd8567ffa259c83665182df987b8a10cc3e4a9a04de53edfa6f1cd0e_prof);

            
            $__internal_4f4e865149c922f31dd08952bfe67ade8261cf71f9bb8ef8ac791fdef9c2d008->leave($__internal_4f4e865149c922f31dd08952bfe67ade8261cf71f9bb8ef8ac791fdef9c2d008_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 64,  373 => 63,  355 => 62,  337 => 59,  334 => 58,  316 => 57,  298 => 54,  295 => 53,  277 => 52,  259 => 49,  256 => 48,  238 => 47,  220 => 44,  217 => 43,  199 => 42,  182 => 38,  176 => 36,  172 => 34,  162 => 30,  158 => 29,  155 => 28,  151 => 27,  148 => 26,  146 => 25,  141 => 24,  139 => 23,  136 => 22,  133 => 21,  114 => 20,  93 => 9,  84 => 7,  80 => 6,  74 => 4,  69 => 3,  52 => 2,  41 => 61,  38 => 56,  35 => 51,  32 => 46,  29 => 41,  25 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Display all the flashes messages #}
{% macro flashes() %}
    {% for type, flashes in app.session.flashBag.all %}
        <div id=\"flashesMessage\" class=\"alert alert-{{ type }}\">
            <ul class=\"list-unstyled\">
                {% for flash in flashes %}
                    <li>{{ flash }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
{% endmacro %}


{#
    Display a bootstrap alert :
    - text : Message to print (string or array)
    - type : danger | warning | success | info (Default : info)
#}
{% macro alert(text, type) %}
    {% set type = 'alert-' ~ type|default('info') %}

    {% if text|default %}
    <div class=\"alert {{ type }}\">
        {% if text is iterable %}
            <ul class=\"form-type-errors list-unstyled\">
                {% for line in text %}
                    <li>
                        <p class=\"text-{{ type }}\">
                            {{ line.message|trans(line.messageParameters) }}
                        </p>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            {{ text|trans }}
        {% endif %}
    </div>
    {% endif %}
{% endmacro %}

{% macro danger(text) %}
    {% from _self import alert %}
    {{ alert(text, 'danger') }}
{% endmacro %}

{% macro error(text) %}
    {% from _self import danger %}
    {{ danger(text) }}
{% endmacro %}

{% macro warning(text) %}
    {% from _self import alert %}
    {{ alert(text, 'warning') }}
{% endmacro %}

{% macro success(text) %}
    {% from _self import alert %}
    {{ alert(text, 'success') }}
{% endmacro %}

{% macro info(text) %}
    {% from _self import alert %}
    {{ alert(text, 'info') }}
{% endmacro %}
", "SyliusResourceBundle:Macros:notification.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Resources\\views\\Macros\\notification.html.twig");
    }
}
