<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_6641a126030f133143425e52c055bf58c5e9bd778ac3c020a0674c30349d59fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88111aedd6e1b8cbfc203570dec91f3fed069d76fa227d26b46bd266eca41f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88111aedd6e1b8cbfc203570dec91f3fed069d76fa227d26b46bd266eca41f9f->enter($__internal_88111aedd6e1b8cbfc203570dec91f3fed069d76fa227d26b46bd266eca41f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_5098f7f59a6e8e670a59ff84326ebd9191587e17928f4430ef95ab3077a36beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5098f7f59a6e8e670a59ff84326ebd9191587e17928f4430ef95ab3077a36beb->enter($__internal_5098f7f59a6e8e670a59ff84326ebd9191587e17928f4430ef95ab3077a36beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88111aedd6e1b8cbfc203570dec91f3fed069d76fa227d26b46bd266eca41f9f->leave($__internal_88111aedd6e1b8cbfc203570dec91f3fed069d76fa227d26b46bd266eca41f9f_prof);

        
        $__internal_5098f7f59a6e8e670a59ff84326ebd9191587e17928f4430ef95ab3077a36beb->leave($__internal_5098f7f59a6e8e670a59ff84326ebd9191587e17928f4430ef95ab3077a36beb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d50dd484c8f41e000d794b1ffd35f759d999c3b626920f95a1c8d83319fd32dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50dd484c8f41e000d794b1ffd35f759d999c3b626920f95a1c8d83319fd32dc->enter($__internal_d50dd484c8f41e000d794b1ffd35f759d999c3b626920f95a1c8d83319fd32dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e180e099111951178f20f80495ba825b25d1fb26521e205d0beb2272f53763ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e180e099111951178f20f80495ba825b25d1fb26521e205d0beb2272f53763ea->enter($__internal_e180e099111951178f20f80495ba825b25d1fb26521e205d0beb2272f53763ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_e180e099111951178f20f80495ba825b25d1fb26521e205d0beb2272f53763ea->leave($__internal_e180e099111951178f20f80495ba825b25d1fb26521e205d0beb2272f53763ea_prof);

        
        $__internal_d50dd484c8f41e000d794b1ffd35f759d999c3b626920f95a1c8d83319fd32dc->leave($__internal_d50dd484c8f41e000d794b1ffd35f759d999c3b626920f95a1c8d83319fd32dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
