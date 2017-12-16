<?php

/* SyliusResourceBundle:Twig:paginate.html.twig */
class __TwigTemplate_573c3f9aabc3aae99a9ed58b6a9b4156926dd23e42caf040ddf546045966704d extends Twig_Template
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
        $__internal_3fded455243d20b85f201c4bc5bfe3199d175a30f0dc95e105d9f965fa411c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fded455243d20b85f201c4bc5bfe3199d175a30f0dc95e105d9f965fa411c97->enter($__internal_3fded455243d20b85f201c4bc5bfe3199d175a30f0dc95e105d9f965fa411c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        $__internal_7b57c7759cde14fee5d2e085fac24a011a6ffc83779c966cec916d44fc36ac72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b57c7759cde14fee5d2e085fac24a011a6ffc83779c966cec916d44fc36ac72->enter($__internal_7b57c7759cde14fee5d2e085fac24a011a6ffc83779c966cec916d44fc36ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 2, $this->getSourceContext()); })()), "maxPerPage", array()), "html", null, true);
        echo "&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limits"]) || array_key_exists("limits", $context) ? $context["limits"] : (function () { throw new Twig_Error_Runtime('Variable "limits" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["limit"] => $context["url"]) {
            // line 8
            echo "    <li>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['limit'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
/ ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 13, $this->getSourceContext()); })()), "nbResults", array()), "html", null, true);
        echo "
";
        
        $__internal_3fded455243d20b85f201c4bc5bfe3199d175a30f0dc95e105d9f965fa411c97->leave($__internal_3fded455243d20b85f201c4bc5bfe3199d175a30f0dc95e105d9f965fa411c97_prof);

        
        $__internal_7b57c7759cde14fee5d2e085fac24a011a6ffc83779c966cec916d44fc36ac72->leave($__internal_7b57c7759cde14fee5d2e085fac24a011a6ffc83779c966cec916d44fc36ac72_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  54 => 12,  43 => 9,  40 => 8,  36 => 7,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    {{ paginator.maxPerPage }}&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    {% for limit, url in limits %}
    <li>
        <a href=\"{{ url }}\">{{ limit }}</a>
    </li>
    {% endfor %}
</ul>
/ {{ paginator.nbResults }}
", "SyliusResourceBundle:Twig:paginate.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/Twig/paginate.html.twig");
    }
}
