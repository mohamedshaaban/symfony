<?php

/* SyliusUiBundle:Macro:breadcrumb.html.twig */
class __TwigTemplate_aa4c4e78ec7d4f3bffe1a692fd810b244029ce4b3c8af7b706cd2ae94de30fe4 extends Twig_Template
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
        $__internal_526bde7b9a4ffa9251a0a74ac4b24f9ffbd0f1a70da3df0221bd4a589dfc34c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526bde7b9a4ffa9251a0a74ac4b24f9ffbd0f1a70da3df0221bd4a589dfc34c0->enter($__internal_526bde7b9a4ffa9251a0a74ac4b24f9ffbd0f1a70da3df0221bd4a589dfc34c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:breadcrumb.html.twig"));

        $__internal_7b4c6226a2909e424abe655cd43e165ed5218d7f1ef02b770d481b7b56a2007b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4c6226a2909e424abe655cd43e165ed5218d7f1ef02b770d481b7b56a2007b->enter($__internal_7b4c6226a2909e424abe655cd43e165ed5218d7f1ef02b770d481b7b56a2007b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:breadcrumb.html.twig"));

        
        $__internal_526bde7b9a4ffa9251a0a74ac4b24f9ffbd0f1a70da3df0221bd4a589dfc34c0->leave($__internal_526bde7b9a4ffa9251a0a74ac4b24f9ffbd0f1a70da3df0221bd4a589dfc34c0_prof);

        
        $__internal_7b4c6226a2909e424abe655cd43e165ed5218d7f1ef02b770d481b7b56a2007b->leave($__internal_7b4c6226a2909e424abe655cd43e165ed5218d7f1ef02b770d481b7b56a2007b_prof);

    }

    // line 1
    public function macro_crumble($__crumbs__ = array(), $__root_path__ = null, $__root_label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "root_path" => $__root_path__,
            "root_label" => $__root_label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8bdd7f689b75e4f24021b6eede48664274e8a55d6cfdb912968ffac13a190f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8bdd7f689b75e4f24021b6eede48664274e8a55d6cfdb912968ffac13a190f93->enter($__internal_8bdd7f689b75e4f24021b6eede48664274e8a55d6cfdb912968ffac13a190f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_513586481476b71dccf07a1e4db9aa6e04d5954c9a21c27adb2db9c0b1f26417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_513586481476b71dccf07a1e4db9aa6e04d5954c9a21c27adb2db9c0b1f26417->enter($__internal_513586481476b71dccf07a1e4db9aa6e04d5954c9a21c27adb2db9c0b1f26417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 3, $this->getSourceContext()); })()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 5
                    echo "                <div class=\"active section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
            ";
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 6
$context["crumb"], "url", array(), "any", true, true)) {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "url", array()), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("root_url", $context)) ? (_twig_default_filter((isset($context["root_url"]) || array_key_exists("root_url", $context) ? $context["root_url"] : (function () { throw new Twig_Error_Runtime('Variable "root_url" does not exist.', 14, $this->getSourceContext()); })()), "/")) : ("/")), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, ((array_key_exists("root_label", $context)) ? (_twig_default_filter((isset($context["root_label"]) || array_key_exists("root_label", $context) ? $context["root_label"] : (function () { throw new Twig_Error_Runtime('Variable "root_label" does not exist.', 14, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
            
            $__internal_513586481476b71dccf07a1e4db9aa6e04d5954c9a21c27adb2db9c0b1f26417->leave($__internal_513586481476b71dccf07a1e4db9aa6e04d5954c9a21c27adb2db9c0b1f26417_prof);

            
            $__internal_8bdd7f689b75e4f24021b6eede48664274e8a55d6cfdb912968ffac13a190f93->leave($__internal_8bdd7f689b75e4f24021b6eede48664274e8a55d6cfdb912968ffac13a190f93_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 16,  113 => 14,  100 => 13,  93 => 10,  84 => 7,  82 => 6,  77 => 5,  74 => 4,  56 => 3,  53 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}, root_path, root_label) %}
    <div class=\"ui breadcrumb\">
        {% for crumb in crumbs %}
            {% if loop.last %}
                <div class=\"active section\">{{ crumb.label }}</div>
            {% elseif crumb.url is defined %}
                <a href=\"{{ crumb.url }}\" class=\"section\">{{ crumb.label }}</a>
                <i class=\"right chevron icon divider\"></i>
            {% else %}
                <div class=\"section\">{{ crumb.label }}</div>
                <i class=\"right chevron icon divider\"></i>
            {% endif %}
        {% else %}
            <a href=\"{{ root_url|default('/') }}\" class=\"section\">{{ root_label|default('sylius.ui.root'|trans) }}</a>
        {% endfor %}
    </div>
{% endmacro %}
", "SyliusUiBundle:Macro:breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/breadcrumb.html.twig");
    }
}
