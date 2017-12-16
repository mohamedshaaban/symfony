<?php

/* SyliusUiBundle:Macro:messages.html.twig */
class __TwigTemplate_e0a6487c42d6543fa8f94a7ffea45dd28beb6ac83b9e583fdc57eb70c7654e3e extends Twig_Template
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
        $__internal_c4573d20c9f4acc9da9b88ba95ccf3319f33f68f728acb8c511f79c216245db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4573d20c9f4acc9da9b88ba95ccf3319f33f68f728acb8c511f79c216245db8->enter($__internal_c4573d20c9f4acc9da9b88ba95ccf3319f33f68f728acb8c511f79c216245db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        $__internal_3fe21912677e9695c0c8602c6efbd7e1121c76ee1713f79ef547cdd60d6314a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe21912677e9695c0c8602c6efbd7e1121c76ee1713f79ef547cdd60d6314a7->enter($__internal_3fe21912677e9695c0c8602c6efbd7e1121c76ee1713f79ef547cdd60d6314a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:messages.html.twig"));

        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
        
        $__internal_c4573d20c9f4acc9da9b88ba95ccf3319f33f68f728acb8c511f79c216245db8->leave($__internal_c4573d20c9f4acc9da9b88ba95ccf3319f33f68f728acb8c511f79c216245db8_prof);

        
        $__internal_3fe21912677e9695c0c8602c6efbd7e1121c76ee1713f79ef547cdd60d6314a7->leave($__internal_3fe21912677e9695c0c8602c6efbd7e1121c76ee1713f79ef547cdd60d6314a7_prof);

    }

    // line 1
    public function macro_default($__message__ = null, $__icon__ = null, $__type__ = null, $__header__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "icon" => $__icon__,
            "type" => $__type__,
            "header" => $__header__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e6e465e01e0cac03056cfdfd97b7d1f67658fd673bae1a5a38b518242b7d44f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e6e465e01e0cac03056cfdfd97b7d1f67658fd673bae1a5a38b518242b7d44f5->enter($__internal_e6e465e01e0cac03056cfdfd97b7d1f67658fd673bae1a5a38b518242b7d44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_bfde7402980a3c45f15918921245e70fe367b59ca77be2e2980fd33f4bd5cc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bfde7402980a3c45f15918921245e70fe367b59ca77be2e2980fd33f4bd5cc71->enter($__internal_bfde7402980a3c45f15918921245e70fe367b59ca77be2e2980fd33f4bd5cc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <div class=\"ui icon ";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 2, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo " message\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo " icon\"></i>
        <div class=\"content\">
            ";
            // line 5
            if ( !twig_test_empty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 5, $this->getSourceContext()); })()))) {
                // line 6
                echo "            <div class=\"header\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("header", $context)) ? (_twig_default_filter((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->getSourceContext()); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->getSourceContext()); })()))) : ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->getSourceContext()); })())))), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
            echo "</p>
        </div>
    </div>
";
            
            $__internal_bfde7402980a3c45f15918921245e70fe367b59ca77be2e2980fd33f4bd5cc71->leave($__internal_bfde7402980a3c45f15918921245e70fe367b59ca77be2e2980fd33f4bd5cc71_prof);

            
            $__internal_e6e465e01e0cac03056cfdfd97b7d1f67658fd673bae1a5a38b518242b7d44f5->leave($__internal_e6e465e01e0cac03056cfdfd97b7d1f67658fd673bae1a5a38b518242b7d44f5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_info($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_92b3b17f8035834d8c33b81ad716bcf9ce585677aaac4098b81728c53e07e8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_92b3b17f8035834d8c33b81ad716bcf9ce585677aaac4098b81728c53e07e8ad->enter($__internal_92b3b17f8035834d8c33b81ad716bcf9ce585677aaac4098b81728c53e07e8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_fd632c3be0aac99adce33a89ab1e87f45b024895110e5849a8245afd240b966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fd632c3be0aac99adce33a89ab1e87f45b024895110e5849a8245afd240b966d->enter($__internal_fd632c3be0aac99adce33a89ab1e87f45b024895110e5849a8245afd240b966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })()), "info circle", "info", "sylius.ui.info");
            echo "
";
            
            $__internal_fd632c3be0aac99adce33a89ab1e87f45b024895110e5849a8245afd240b966d->leave($__internal_fd632c3be0aac99adce33a89ab1e87f45b024895110e5849a8245afd240b966d_prof);

            
            $__internal_92b3b17f8035834d8c33b81ad716bcf9ce585677aaac4098b81728c53e07e8ad->leave($__internal_92b3b17f8035834d8c33b81ad716bcf9ce585677aaac4098b81728c53e07e8ad_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_success($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3ed13af15f8d08c92ad2f0c5e94285eed715fbc1f22ba6383e3b3fcc2f80604b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3ed13af15f8d08c92ad2f0c5e94285eed715fbc1f22ba6383e3b3fcc2f80604b->enter($__internal_3ed13af15f8d08c92ad2f0c5e94285eed715fbc1f22ba6383e3b3fcc2f80604b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_fceb877f15a50df05762fbe66242ef16f2a78c0450112f0edd32d0545b5435b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fceb877f15a50df05762fbe66242ef16f2a78c0450112f0edd32d0545b5435b9->enter($__internal_fceb877f15a50df05762fbe66242ef16f2a78c0450112f0edd32d0545b5435b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 22, $this->getSourceContext()); })()), "checkmark", "success", "sylius.ui.success");
            echo "
";
            
            $__internal_fceb877f15a50df05762fbe66242ef16f2a78c0450112f0edd32d0545b5435b9->leave($__internal_fceb877f15a50df05762fbe66242ef16f2a78c0450112f0edd32d0545b5435b9_prof);

            
            $__internal_3ed13af15f8d08c92ad2f0c5e94285eed715fbc1f22ba6383e3b3fcc2f80604b->leave($__internal_3ed13af15f8d08c92ad2f0c5e94285eed715fbc1f22ba6383e3b3fcc2f80604b_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_error($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_793cda5dbe01e35d9a31df3d6e40a4bdd2b0705679bc8757866f40e7a28db101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_793cda5dbe01e35d9a31df3d6e40a4bdd2b0705679bc8757866f40e7a28db101->enter($__internal_793cda5dbe01e35d9a31df3d6e40a4bdd2b0705679bc8757866f40e7a28db101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_11f3302f0ba6f4bc6043e5ccfa68f3a7f4b1b081abcfa02ed55c9f98c22407a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_11f3302f0ba6f4bc6043e5ccfa68f3a7f4b1b081abcfa02ed55c9f98c22407a6->enter($__internal_11f3302f0ba6f4bc6043e5ccfa68f3a7f4b1b081abcfa02ed55c9f98c22407a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 27, $this->getSourceContext()); })()), "remove", "negative", "sylius.ui.error");
            echo "
";
            
            $__internal_11f3302f0ba6f4bc6043e5ccfa68f3a7f4b1b081abcfa02ed55c9f98c22407a6->leave($__internal_11f3302f0ba6f4bc6043e5ccfa68f3a7f4b1b081abcfa02ed55c9f98c22407a6_prof);

            
            $__internal_793cda5dbe01e35d9a31df3d6e40a4bdd2b0705679bc8757866f40e7a28db101->leave($__internal_793cda5dbe01e35d9a31df3d6e40a4bdd2b0705679bc8757866f40e7a28db101_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 27,  200 => 26,  182 => 25,  164 => 22,  161 => 21,  143 => 20,  125 => 17,  122 => 16,  104 => 15,  84 => 10,  78 => 7,  75 => 6,  73 => 5,  68 => 3,  63 => 2,  42 => 1,  31 => 24,  28 => 19,  25 => 14,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(message, icon, type, header) %}
    <div class=\"ui icon {{ type|default('') }} message\">
        <i class=\"{{ icon }} icon\"></i>
        <div class=\"content\">
            {% if type is not empty %}
            <div class=\"header\">
                {{ header|default(type)|trans }}
            </div>
            {% endif %}
            <p>{{ message|trans }}</p>
        </div>
    </div>
{% endmacro %}

{% macro info(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'info circle', 'info', 'sylius.ui.info') }}
{% endmacro %}

{% macro success(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'checkmark', 'success', 'sylius.ui.success') }}
{% endmacro %}

{% macro error(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'remove', 'negative', 'sylius.ui.error') }}
{% endmacro %}
", "SyliusUiBundle:Macro:messages.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/messages.html.twig");
    }
}
