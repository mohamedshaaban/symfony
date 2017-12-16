<?php

/* FOSOAuthServerBundle:Authorize:authorize_content.html.twig */
class __TwigTemplate_3286d20eaa229ec48df6d3dbccb1ebea10fe795982f4aefff026c255381e3bbe extends Twig_Template
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
        $__internal_04401e2704541d356d089835c60d683b861aa0adce641623ca51c3b682d6b972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04401e2704541d356d089835c60d683b861aa0adce641623ca51c3b682d6b972->enter($__internal_04401e2704541d356d089835c60d683b861aa0adce641623ca51c3b682d6b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig"));

        $__internal_ffc1aa6ab8ff7a904759cc5bb69fb50da229e3ba059dad9d4e35121008d5e01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc1aa6ab8ff7a904759cc5bb69fb50da229e3ba059dad9d4e35121008d5e01a->enter($__internal_ffc1aa6ab8ff7a904759cc5bb69fb50da229e3ba059dad9d4e35121008d5e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_oauth_server_authorize"), "label_attr" => array("class" => "fos_oauth_server_authorize")));
        echo "
    <input type=\"submit\" name=\"accepted\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.accept", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />
    <input type=\"submit\" name=\"rejected\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.reject", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />

    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "client_id", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "response_type", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "redirect_uri", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "state", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "scope", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'rest');
        echo "
</form>
";
        
        $__internal_04401e2704541d356d089835c60d683b861aa0adce641623ca51c3b682d6b972->leave($__internal_04401e2704541d356d089835c60d683b861aa0adce641623ca51c3b682d6b972_prof);

        
        $__internal_ffc1aa6ab8ff7a904759cc5bb69fb50da229e3ba059dad9d4e35121008d5e01a->leave($__internal_ffc1aa6ab8ff7a904759cc5bb69fb50da229e3ba059dad9d4e35121008d5e01a_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'method': 'POST', 'action': path('fos_oauth_server_authorize'), 'label_attr': {'class': 'fos_oauth_server_authorize'} }) }}
    <input type=\"submit\" name=\"accepted\" value=\"{{ 'authorize.accept'|trans({}, 'FOSOAuthServerBundle') }}\" />
    <input type=\"submit\" name=\"rejected\" value=\"{{ 'authorize.reject'|trans({}, 'FOSOAuthServerBundle') }}\" />

    {{ form_row(form.client_id) }}
    {{ form_row(form.response_type) }}
    {{ form_row(form.redirect_uri) }}
    {{ form_row(form.state) }}
    {{ form_row(form.scope) }}
    {{ form_rest(form) }}
</form>
", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views/Authorize/authorize_content.html.twig");
    }
}
