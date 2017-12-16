<?php

/* @SyliusUi/Security/_login.html.twig */
class __TwigTemplate_180a5befdf5b41d2c174eca62b8723f7dc9528d432a5efb89e9fe073d805f07f extends Twig_Template
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
        $__internal_b6ac3941a02fc0e4777b97df04d23c8228cb14a3d1fc1c7ab27f329c76706d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ac3941a02fc0e4777b97df04d23c8228cb14a3d1fc1c7ab27f329c76706d1a->enter($__internal_b6ac3941a02fc0e4777b97df04d23c8228cb14a3d1fc1c7ab27f329c76706d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        $__internal_11bbcba67f83150bacf3544dbb0355a3857ecf1ca4a11961276d836336929185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bbcba67f83150bacf3544dbb0355a3857ecf1ca4a11961276d836336929185->enter($__internal_11bbcba67f83150bacf3544dbb0355a3857ecf1ca4a11961276d836336929185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Security/_login.html.twig", 3);
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "logo", array(), "any", true, true)) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new Twig_Error_Runtime('Variable "paths" does not exist.', 10, $this->getSourceContext()); })()), "logo", array())), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if ((isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 15
            echo $context["messages"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 15, $this->getSourceContext()); })()), "message", array()));
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start', array("action" => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 19, $this->getSourceContext()); })()), "/")) : ("/")), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
            <div class=\"ui left aligned segment\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "_username", array()), 'row', array("value" => ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->getSourceContext()); })()), "")) : (""))));
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "_remember_me", array()), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
        
        $__internal_b6ac3941a02fc0e4777b97df04d23c8228cb14a3d1fc1c7ab27f329c76706d1a->leave($__internal_b6ac3941a02fc0e4777b97df04d23c8228cb14a3d1fc1c7ab27f329c76706d1a_prof);

        
        $__internal_11bbcba67f83150bacf3544dbb0355a3857ecf1ca4a11961276d836336929185->leave($__internal_11bbcba67f83150bacf3544dbb0355a3857ecf1ca4a11961276d836336929185_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Security/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  91 => 28,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 7,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        {{ sonata_block_render_event('sylius.admin.login.before_form', {'form': form}) }}

        {% if paths.logo is defined %}
        <img src=\"{{ asset(paths.logo) }}\" class=\"ui fluid image\" id=\"logo\">
        {% endif %}

        {% if last_error %}
            <div class=\"ui left aligned basic segment\">
                {{ messages.error(last_error.message) }}
            </div>
        {% endif %}

        {{ form_start(form, {'action': action|default('/'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
            <div class=\"ui left aligned segment\">
                {{ form_row(form._username, {'value': last_username|default('')}) }}
                {{ form_row(form._password) }}
                {{ form_row(form._remember_me) }}
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"{{ csrf_token('admin_authenticate') }}\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            {{ sonata_block_render_event('sylius.admin.login.form', {'form': form}) }}

        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", "@SyliusUi/Security/_login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Security\\_login.html.twig");
    }
}
