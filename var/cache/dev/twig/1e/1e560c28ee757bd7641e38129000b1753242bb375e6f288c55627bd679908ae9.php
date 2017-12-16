<?php

/* SyliusUiBundle:Grid/Action:archive.html.twig */
class __TwigTemplate_0f4ca522b1fa4eed2be3bcf1977ca8235c19adca17a5819cec1fc4eb94744643 extends Twig_Template
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
        $__internal_576f2ebe7c0c1784ded4a96c3967b1f82ea31a86e5c883cc6ceaf57ec1c8147f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576f2ebe7c0c1784ded4a96c3967b1f82ea31a86e5c883cc6ceaf57ec1c8147f->enter($__internal_576f2ebe7c0c1784ded4a96c3967b1f82ea31a86e5c883cc6ceaf57ec1c8147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:archive.html.twig"));

        $__internal_950bde7f83c95807d8af4b3e8c9005f4914914c610c187cb202d1537a178c9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950bde7f83c95807d8af4b3e8c9005f4914914c610c187cb202d1537a178c9a4->enter($__internal_950bde7f83c95807d8af4b3e8c9005f4914914c610c187cb202d1537a178c9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:archive.html.twig"));

        // line 1
        $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 1, $this->getSourceContext()); })()), "requestConfiguration", array()), "getRouteName", array(0 => "archive"), "method"), array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "id", array())));
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"POST\" name=\"sylius_archivable\">
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("sylius_archivable"), "html", null, true);
        echo "\" />

    <button class=\"ui brown labeled icon button\" type=\"submit\" data-requires-confirmation>
        <i class=\"";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "icon", array()), "archive")) : ("archive")), "html", null, true);
        echo " icon\"></i>
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()), "archivedAt", array()))) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "options", array(), "any", false, true), "restore_label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "options", array(), "any", false, true), "restore_label", array()), "sylius.ui.restore")) : ("sylius.ui.restore"))), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["action"] ?? null), "label", array()), "sylius.ui.archive")) : ("sylius.ui.archive"))), "html", null, true);
            echo "
        ";
        }
        // line 14
        echo "    </button>
</form>
";
        
        $__internal_576f2ebe7c0c1784ded4a96c3967b1f82ea31a86e5c883cc6ceaf57ec1c8147f->leave($__internal_576f2ebe7c0c1784ded4a96c3967b1f82ea31a86e5c883cc6ceaf57ec1c8147f_prof);

        
        $__internal_950bde7f83c95807d8af4b3e8c9005f4914914c610c187cb202d1537a178c9a4->leave($__internal_950bde7f83c95807d8af4b3e8c9005f4914914c610c187cb202d1537a178c9a4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 12,  47 => 10,  45 => 9,  41 => 8,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set path = path(grid.requestConfiguration.getRouteName('archive'), {'id': data.id}) %}

<form action=\"{{ path }}\" method=\"POST\" name=\"sylius_archivable\">
    <input type=\"hidden\" name=\"_method\" value=\"PATCH\">
    <input type=\"hidden\" name=\"sylius_archivable[_token]\" value=\"{{ csrf_token('sylius_archivable') }}\" />

    <button class=\"ui brown labeled icon button\" type=\"submit\" data-requires-confirmation>
        <i class=\"{{ action.icon|default('archive') }} icon\"></i>
        {% if data.archivedAt is not null %}
            {{ action.options.restore_label|default('sylius.ui.restore')|trans }}
        {% else %}
            {{ action.label|default('sylius.ui.archive')|trans }}
        {% endif %}
    </button>
</form>
", "SyliusUiBundle:Grid/Action:archive.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/archive.html.twig");
    }
}
