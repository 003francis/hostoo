<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/chambre')) {
            // chambre_index
            if ('/chambre' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_chambre_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'chambre_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chambre_index;
                }

                return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\ChambreController::indexAction',  '_route' => 'chambre_index',);
            }
            not_chambre_index:

            // chambre_new
            if ('/chambre/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chambre_new;
                }

                return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\ChambreController::newAction',  '_route' => 'chambre_new',);
            }
            not_chambre_new:

            // chambre_show
            if (preg_match('#^/chambre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_chambre_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chambre_show')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\ChambreController::showAction',));
            }
            not_chambre_show:

            // chambre_edit
            if (preg_match('#^/chambre/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_chambre_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chambre_edit')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\ChambreController::editAction',));
            }
            not_chambre_edit:

            // chambre_delete
            if (preg_match('#^/chambre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_chambre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chambre_delete')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\ChambreController::deleteAction',));
            }
            not_chambre_delete:

        }

        // hostoo_hospis_default_index
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_hostoo_hospis_default_index;
            } else {
                return $this->redirect($rawPathinfo.'/', 'hostoo_hospis_default_index');
            }

            return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hostoo_hospis_default_index',);
        }
        not_hostoo_hospis_default_index:

        if (0 === strpos($pathinfo, '/hospitalisation')) {
            // hospitalisation_index
            if ('/hospitalisation' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_hospitalisation_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'hospitalisation_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hospitalisation_index;
                }

                return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\HospitalisationController::indexAction',  '_route' => 'hospitalisation_index',);
            }
            not_hospitalisation_index:

            // hospitalisation_new
            if ('/hospitalisation/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hospitalisation_new;
                }

                return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\HospitalisationController::newAction',  '_route' => 'hospitalisation_new',);
            }
            not_hospitalisation_new:

            // hospitalisation_show
            if (preg_match('#^/hospitalisation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hospitalisation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_show')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\HospitalisationController::showAction',));
            }
            not_hospitalisation_show:

            // hospitalisation_edit
            if (preg_match('#^/hospitalisation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hospitalisation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_edit')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\HospitalisationController::editAction',));
            }
            not_hospitalisation_edit:

            // hospitalisation_delete
            if (preg_match('#^/hospitalisation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_hospitalisation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_delete')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\HospitalisationController::deleteAction',));
            }
            not_hospitalisation_delete:

            if (0 === strpos($pathinfo, '/hospitalisation/tour')) {
                // hospitalisation_tour_index
                if (preg_match('#^/hospitalisation/tour/(?P<id>[^/]++)/liste$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hospitalisation_tour_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_index')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::indexAction',));
                }
                not_hospitalisation_tour_index:

                // hospitalisation_tour_tours
                if (preg_match('#^/hospitalisation/tour/(?P<hos>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hospitalisation_tour_tours;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_tours')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::toursHospitalisationAction',));
                }
                not_hospitalisation_tour_tours:

                // hospitalisation_tour_new
                if (0 === strpos($pathinfo, '/hospitalisation/tour/new') && preg_match('#^/hospitalisation/tour/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_hospitalisation_tour_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_new')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::newAction',));
                }
                not_hospitalisation_tour_new:

                // hospitalisation_tour_show
                if (preg_match('#^/hospitalisation/tour/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hospitalisation_tour_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_show')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::showAction',));
                }
                not_hospitalisation_tour_show:

                // hospitalisation_tour_edit
                if (preg_match('#^/hospitalisation/tour/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_hospitalisation_tour_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_edit')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::editAction',));
                }
                not_hospitalisation_tour_edit:

                // hospitalisation_tour_delete
                if (preg_match('#^/hospitalisation/tour/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_hospitalisation_tour_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospitalisation_tour_delete')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::deleteAction',));
                }
                not_hospitalisation_tour_delete:

                // facturer_actes_tout
                if (0 === strpos($pathinfo, '/hospitalisation/tour/facturerActesTout') && preg_match('#^/hospitalisation/tour/facturerActesTout/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturer_actes_tout')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::factureActesAction',));
                }

                if (0 === strpos($pathinfo, '/hospitalisation/tour/labo-actes')) {
                    // labo_actes
                    if ('/hospitalisation/tour/labo-actes' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::ajouterActeAction',  '_route' => 'labo_actes',);
                    }

                    // labo_actes-supp
                    if (0 === strpos($pathinfo, '/hospitalisation/tour/labo-actes-supp') && preg_match('#^/hospitalisation/tour/labo\\-actes\\-supp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'labo_actes-supp')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::supprimerActeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/hospitalisation/tour/img-actes')) {
                    // img_actes
                    if ('/hospitalisation/tour/img-actes' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::ajouterImgAction',  '_route' => 'img_actes',);
                    }

                    // img_actes_supp
                    if ('/hospitalisation/tour/img-actes-supp' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::supprimerImgAction',  '_route' => 'img_actes_supp',);
                    }

                }

                if (0 === strpos($pathinfo, '/hospitalisation/tour/aj')) {
                    // aj_prod
                    if ('/hospitalisation/tour/aj-prod' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::ajouterProdAction',  '_route' => 'aj_prod',);
                    }

                    // ajouter_med_prod
                    if (0 === strpos($pathinfo, '/hospitalisation/tour/ajouter-med-prod') && preg_match('#^/hospitalisation/tour/ajouter\\-med\\-prod/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_med_prod')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::ajouterMedAction',));
                    }

                }

                // suppriner_med_prod
                if (0 === strpos($pathinfo, '/hospitalisation/tour/supprimer-med-prod') && preg_match('#^/hospitalisation/tour/supprimer\\-med\\-prod/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppriner_med_prod')), array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::supprimerMedAction',));
                }

                // autres_actes_hop
                if ('/hospitalisation/tour/ajouter-actes-autres' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\HospisBundle\\Controller\\TourController::ajouterAutresAction',  '_route' => 'autres_actes_hop',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // profile_utilisateur
            if (0 === strpos($pathinfo, '/profile/Utilisateur') && preg_match('#^/profile/Utilisateur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_utilisateur')), array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::profileUtilisateurAction',));
            }

            // change_mdp
            if (0 === strpos($pathinfo, '/profile/MDP') && preg_match('#^/profile/MDP/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_mdp')), array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::changeMDPAction',));
            }

        }

        // rdv_reception
        if ('/Rdvrecpetion' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::newRECAction',  '_route' => 'rdv_reception',);
        }

        // valider_par_visa
        if (0 === strpos($pathinfo, '/ValiderVisa') && preg_match('#^/ValiderVisa/(?P<fact>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_par_visa')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::visaActeAction',));
        }

        // journal_de_caisse
        if ('/JournalDeCaisse' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::journalDeCaissesAction',  '_route' => 'journal_de_caisse',);
        }

        // mettre_en_caisse
        if (0 === strpos($pathinfo, '/EnCaisse') && preg_match('#^/EnCaisse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mettre_en_caisse')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::encaisserAction',));
        }

        // cs_imprimer_les_actes
        if ('/ImprimerLesActesEpisode' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::imprimerLesActes',  '_route' => 'cs_imprimer_les_actes',);
        }

        // cs_rapport_de_frequentation
        if ('/RapportDesFrequentations' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::rapportDesFrequentations',  '_route' => 'cs_rapport_de_frequentation',);
        }

        // creer_une_facture
        if (0 === strpos($pathinfo, '/CreerUneFacture') && preg_match('#^/CreerUneFacture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'creer_une_facture')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::creerUneFacture',));
        }

        // facture_episode
        if (0 === strpos($pathinfo, '/VoirFacture') && preg_match('#^/VoirFacture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_episode')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::voirLaFacture',));
        }

        if (0 === strpos($pathinfo, '/facturer')) {
            // facture_actes_annuler
            if (0 === strpos($pathinfo, '/facturerAnnulerPanier') && preg_match('#^/facturerAnnulerPanier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_actes_annuler')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::annulerfactureActesAjouterAction',));
            }

            // facture_actes_supprimer
            if (0 === strpos($pathinfo, '/facturerSupprimerPanier') && preg_match('#^/facturerSupprimerPanier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_actes_supprimer')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::supprimerfactureActesAction',));
            }

            if (0 === strpos($pathinfo, '/facturerPanier')) {
                // facture_actes_ajouter
                if (preg_match('#^/facturerPanier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_actes_ajouter')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::factureActesAjouterAction',));
                }

                // facture_actes_valider
                if (0 === strpos($pathinfo, '/facturerPanierValider') && preg_match('#^/facturerPanierValider/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_actes_valider')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::validerFactureActesAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/medecin/consultation')) {
            // medecin_consultation_index
            if ('/medecin/consultation' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_medecin_consultation_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'medecin_consultation_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medecin_consultation_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::indexAction',  '_route' => 'medecin_consultation_index',);
            }
            not_medecin_consultation_index:

            if (0 === strpos($pathinfo, '/medecin/consultation/new')) {
                // medecin_consultation_new
                if (preg_match('#^/medecin/consultation/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_medecin_consultation_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_consultation_new')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::newAction',));
                }
                not_medecin_consultation_new:

                // hospi_consultation_new
                if (0 === strpos($pathinfo, '/medecin/consultation/newConsult') && preg_match('#^/medecin/consultation/newConsult/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_hospi_consultation_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hospi_consultation_new')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::newConsultAction',));
                }
                not_hospi_consultation_new:

            }

            // medecin_consultation_show
            if (preg_match('#^/medecin/consultation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medecin_consultation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_consultation_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::showAction',));
            }
            not_medecin_consultation_show:

            // medecin_consultation_afficher
            if (0 === strpos($pathinfo, '/medecin/consultation/afficherconsultation') && preg_match('#^/medecin/consultation/afficherconsultation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medecin_consultation_afficher;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_consultation_afficher')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::afficheAction',));
            }
            not_medecin_consultation_afficher:

            // medecin_consultation_edit
            if (preg_match('#^/medecin/consultation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_medecin_consultation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_consultation_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::editAction',));
            }
            not_medecin_consultation_edit:

            // medecin_consultation_delete
            if (preg_match('#^/medecin/consultation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_medecin_consultation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medecin_consultation_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ConsultationController::deleteAction',));
            }
            not_medecin_consultation_delete:

        }

        // hostoo_sante_episode_refactoriserdep
        if ('/DepFlash' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::refactoriserDepAction',  '_route' => 'hostoo_sante_episode_refactoriserdep',);
        }

        // afficher_les_actes
        if (0 === strpos($pathinfo, '/AfficherLesActesEpisode') && preg_match('#^/AfficherLesActesEpisode/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_les_actes')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::afficherLesActes',));
        }

        // imprimer_les_actes
        if ('/ImprimerLesActesEpisode' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::imprimerLesActes',  '_route' => 'imprimer_les_actes',);
        }

        // rapport_de_frequentation
        if ('/RapportDesFrequentations' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::rapportDesFrequentations',  '_route' => 'rapport_de_frequentation',);
        }

        if (0 === strpos($pathinfo, '/edition-facture')) {
            // edition-facture_index
            if ('/edition-facture' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_editionfacture_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'edition-facture_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editionfacture_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\FactureController::indexAction',  '_route' => 'edition-facture_index',);
            }
            not_editionfacture_index:

            // edition-facture_new
            if ('/edition-facture/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_editionfacture_new;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\FactureController::newAction',  '_route' => 'edition-facture_new',);
            }
            not_editionfacture_new:

            // edition-facture_show
            if (preg_match('#^/edition\\-facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_editionfacture_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edition-facture_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\FactureController::showAction',));
            }
            not_editionfacture_show:

            // edition-facture_edit
            if (preg_match('#^/edition\\-facture/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_editionfacture_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edition-facture_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\FactureController::editAction',));
            }
            not_editionfacture_edit:

            // edition-facture_delete
            if (preg_match('#^/edition\\-facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_editionfacture_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edition-facture_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\FactureController::deleteAction',));
            }
            not_editionfacture_delete:

        }

        // img_tb
        if ('/tableaudebord_img' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::tbAction',  '_route' => 'img_tb',);
        }

        // examens_img
        if ('/examens-img' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::examensAction',  '_route' => 'examens_img',);
        }

        // valider_resultat_attimg
        if (0 === strpos($pathinfo, '/valider-exam-attimg') && preg_match('#^/valider\\-exam\\-attimg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_resultat_attimg')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::validerResultatAttAction',));
        }

        // examens_img_attente
        if ('/Examen-img-attente' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::ExamenEnAttenteAction',  '_route' => 'examens_img_attente',);
        }

        // img_res_attente
        if (0 === strpos($pathinfo, '/attente_resultat_img') && preg_match('#^/attente_resultat_img/(?P<id>[^/]++)/(?P<act>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'img_res_attente')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::enAttenteAction',));
        }

        // labo_tb
        if ('/tableaudebord_labo' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::tbAction',  '_route' => 'labo_tb',);
        }

        // labo_res_attente
        if (0 === strpos($pathinfo, '/attente_resultat') && preg_match('#^/attente_resultat/(?P<id>[^/]++)/(?P<act>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'labo_res_attente')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::enAttenteAction',));
        }

        // examens_labo
        if ('/examens-labo' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::examensAction',  '_route' => 'examens_labo',);
        }

        // exattente
        if ('/Examen-en-attente' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::ExamenEnAttenteAction',  '_route' => 'exattente',);
        }

        // valider_resultat_att
        if (0 === strpos($pathinfo, '/valider-exam-att') && preg_match('#^/valider\\-exam\\-att/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_resultat_att')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::validerResultatAttAction',));
        }

        // rapport_labo
        if ('/RapportLabo' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::rapportLaboAction',  '_route' => 'rapport_labo',);
        }

        // nombreActe_labo
        if (0 === strpos($pathinfo, '/NombreActes') && preg_match('#^/NombreActes/(?P<acte>[^/]++)/(?P<categ>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nombreActe_labo')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::nbreActesAction',));
        }

        // ordonnance_hospitalisation
        if (0 === strpos($pathinfo, '/hos-ord') && preg_match('#^/hos\\-ord/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_hospitalisation')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::newHospisAction',));
        }

        if (0 === strpos($pathinfo, '/ordonnancelabo')) {
            // ordonnancelabo_index
            if ('/ordonnancelabo' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_ordonnancelabo_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'ordonnancelabo_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnancelabo_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceLaboController::indexAction',  '_route' => 'ordonnancelabo_index',);
            }
            not_ordonnancelabo_index:

            // ordonnancelabo_show
            if (preg_match('#^/ordonnancelabo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnancelabo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnancelabo_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceLaboController::showAction',));
            }
            not_ordonnancelabo_show:

            // ordonnancelabo_correct
            if (0 === strpos($pathinfo, '/ordonnancelabo/correct_lab') && preg_match('#^/ordonnancelabo/correct_lab/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnancelabo_correct;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnancelabo_correct')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceLaboController::correctAction',));
            }
            not_ordonnancelabo_correct:

            // ordonnancelabo_printshow
            if (0 === strpos($pathinfo, '/ordonnancelabo/imprimer') && preg_match('#^/ordonnancelabo/imprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnancelabo_printshow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnancelabo_printshow')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceLaboController::showPrintAction',));
            }
            not_ordonnancelabo_printshow:

        }

        // hostoo_sante_patient_chargercode
        if ('/chargerCodes' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::chargerCode',  '_route' => 'hostoo_sante_patient_chargercode',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/requerant')) {
                // requerant_index
                if ('/requerant' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_requerant_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'requerant_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_requerant_index;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::indexAction',  '_route' => 'requerant_index',);
                }
                not_requerant_index:

                // requerant_new
                if ('/requerant/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_requerant_new;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::newAction',  '_route' => 'requerant_new',);
                }
                not_requerant_new:

                // requerant_show
                if (preg_match('#^/requerant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_requerant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'requerant_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::showAction',));
                }
                not_requerant_show:

                // requerant_edit
                if (preg_match('#^/requerant/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_requerant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'requerant_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::editAction',));
                }
                not_requerant_edit:

                // requerant_delete
                if (preg_match('#^/requerant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_requerant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'requerant_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::deleteAction',));
                }
                not_requerant_delete:

                // facture_un_requerant
                if (0 === strpos($pathinfo, '/requerant/FacturerRequerant') && preg_match('#^/requerant/FacturerRequerant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_un_requerant')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::factureRequerant',));
                }

                // valider_facture_requerant
                if (preg_match('#^/requerant/(?P<id>[^/]++)/ValiderFactureRequerant$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != '') {
                        $allow[] = '';
                        goto not_valider_facture_requerant;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_facture_requerant')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RequerantController::validerLaFacture',));
                }
                not_valider_facture_requerant:

            }

            if (0 === strpos($pathinfo, '/resultats')) {
                if (0 === strpos($pathinfo, '/resultatsimg')) {
                    // resultatsimg_index
                    if ('/resultatsimg' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_resultatsimg_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'resultatsimg_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_resultatsimg_index;
                        }

                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsImgController::indexAction',  '_route' => 'resultatsimg_index',);
                    }
                    not_resultatsimg_index:

                    // resultatsimg_new
                    if ('/resultatsimg/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_resultatsimg_new;
                        }

                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsImgController::newAction',  '_route' => 'resultatsimg_new',);
                    }
                    not_resultatsimg_new:

                    // resultatsimg_edit
                    if (preg_match('#^/resultatsimg/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_resultatsimg_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatsimg_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsImgController::editAction',));
                    }
                    not_resultatsimg_edit:

                    // resultatsimg_delete
                    if (preg_match('#^/resultatsimg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_resultatsimg_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatsimg_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsImgController::deleteAction',));
                    }
                    not_resultatsimg_delete:

                    // resultatsimg_show
                    if (preg_match('#^/resultatsimg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_resultatsimg_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatsimg_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsImgController::showAction',));
                    }
                    not_resultatsimg_show:

                }

                if (0 === strpos($pathinfo, '/resultatslabo')) {
                    // resultatslabo_index
                    if ('/resultatslabo' === rtrim($pathinfo, '/')) {
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                            goto not_resultatslabo_index;
                        } else {
                            return $this->redirect($rawPathinfo.'/', 'resultatslabo_index');
                        }

                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_resultatslabo_index;
                        }

                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsLaboController::indexAction',  '_route' => 'resultatslabo_index',);
                    }
                    not_resultatslabo_index:

                    // resultatslabo_new
                    if ('/resultatslabo/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_resultatslabo_new;
                        }

                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsLaboController::newAction',  '_route' => 'resultatslabo_new',);
                    }
                    not_resultatslabo_new:

                    // resultatslabo_show
                    if (preg_match('#^/resultatslabo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_resultatslabo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatslabo_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsLaboController::showAction',));
                    }
                    not_resultatslabo_show:

                    // resultatslabo_edit
                    if (preg_match('#^/resultatslabo/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_resultatslabo_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatslabo_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsLaboController::editAction',));
                    }
                    not_resultatslabo_edit:

                    // resultatslabo_delete
                    if (preg_match('#^/resultatslabo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_resultatslabo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultatslabo_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ResultatsLaboController::deleteAction',));
                    }
                    not_resultatslabo_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/valeurref')) {
            // valeurref_index
            if ('/valeurref' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_valeurref_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'valeurref_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_valeurref_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::indexAction',  '_route' => 'valeurref_index',);
            }
            not_valeurref_index:

            if (0 === strpos($pathinfo, '/valeurref/new')) {
                // valeurref_new
                if ('/valeurref/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_valeurref_new;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::newAction',  '_route' => 'valeurref_new',);
                }
                not_valeurref_new:

                // valeurref_newacte
                if (preg_match('#^/valeurref/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_valeurref_newacte;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valeurref_newacte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::newActeAction',));
                }
                not_valeurref_newacte:

            }

            // valeurref_show
            if (preg_match('#^/valeurref/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_valeurref_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valeurref_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::showAction',));
            }
            not_valeurref_show:

            // valeurref_edit
            if (preg_match('#^/valeurref/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_valeurref_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valeurref_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::editAction',));
            }
            not_valeurref_edit:

            // valeurref_delete
            if (preg_match('#^/valeurref/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_valeurref_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valeurref_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ValeurRefController::deleteAction',));
            }
            not_valeurref_delete:

        }

        if (0 === strpos($pathinfo, '/ordonnanceimg')) {
            // ordonnanceimg_index
            if ('/ordonnanceimg' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_ordonnanceimg_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'ordonnanceimg_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnanceimg_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ordonnanceImgController::indexAction',  '_route' => 'ordonnanceimg_index',);
            }
            not_ordonnanceimg_index:

            // ordonnanceimg_show
            if (preg_match('#^/ordonnanceimg/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnanceimg_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnanceimg_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ordonnanceImgController::showAction',));
            }
            not_ordonnanceimg_show:

            // ordonnanceimg_correct
            if (0 === strpos($pathinfo, '/ordonnanceimg/correct_lab') && preg_match('#^/ordonnanceimg/correct_lab/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnanceimg_correct;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnanceimg_correct')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ordonnanceImgController::correctAction',));
            }
            not_ordonnanceimg_correct:

            // ordonnanceimg_printshow
            if (0 === strpos($pathinfo, '/ordonnanceimg/imprimer') && preg_match('#^/ordonnanceimg/imprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnanceimg_printshow;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnanceimg_printshow')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ordonnanceImgController::showPrintAction',));
            }
            not_ordonnanceimg_printshow:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cloture')) {
                // cloture_index
                if ('/cloture' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_cloture_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'cloture_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cloture_index;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::indexAction',  '_route' => 'cloture_index',);
                }
                not_cloture_index:

                // cloture_lacaisse
                if (0 === strpos($pathinfo, '/cloture/cloture_lacaisse') && preg_match('#^/cloture/cloture_lacaisse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cloture_lacaisse;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cloture_lacaisse')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::clotureAction',));
                }
                not_cloture_lacaisse:

                // cloture_new
                if ('/cloture/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cloture_new;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::newAction',  '_route' => 'cloture_new',);
                }
                not_cloture_new:

                // cloture_show
                if (preg_match('#^/cloture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cloture_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cloture_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::showAction',));
                }
                not_cloture_show:

                // cloture_edit
                if (preg_match('#^/cloture/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_cloture_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cloture_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::editAction',));
                }
                not_cloture_edit:

                // cloture_delete
                if (preg_match('#^/cloture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cloture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cloture_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ClotureController::deleteAction',));
                }
                not_cloture_delete:

            }

            if (0 === strpos($pathinfo, '/compte')) {
                if (0 === strpos($pathinfo, '/comptecaisse')) {
                    // comptecaisse_index
                    if (preg_match('#^/comptecaisse/(?P<cais>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_comptecaisse_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptecaisse_index')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteCaisseController::indexAction',));
                    }
                    not_comptecaisse_index:

                    // comptecaisse_new
                    if (0 === strpos($pathinfo, '/comptecaisse/new') && preg_match('#^/comptecaisse/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_comptecaisse_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptecaisse_new')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteCaisseController::newAction',));
                    }
                    not_comptecaisse_new:

                    // comptecaisse_show
                    if (preg_match('#^/comptecaisse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_comptecaisse_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptecaisse_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteCaisseController::showAction',));
                    }
                    not_comptecaisse_show:

                    // comptecaisse_edit
                    if (preg_match('#^/comptecaisse/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_comptecaisse_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptecaisse_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteCaisseController::editAction',));
                    }
                    not_comptecaisse_edit:

                    // comptecaisse_delete
                    if (preg_match('#^/comptecaisse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_comptecaisse_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptecaisse_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteCaisseController::deleteAction',));
                    }
                    not_comptecaisse_delete:

                }

                if (0 === strpos($pathinfo, '/comptesociete')) {
                    // comptesociete_index
                    if (preg_match('#^/comptesociete/(?P<soc>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_comptesociete_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptesociete_index')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteController::indexAction',));
                    }
                    not_comptesociete_index:

                    // comptesociete_new
                    if (0 === strpos($pathinfo, '/comptesociete/new') && preg_match('#^/comptesociete/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_comptesociete_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptesociete_new')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteController::newAction',));
                    }
                    not_comptesociete_new:

                    // comptesociete_show
                    if (preg_match('#^/comptesociete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_comptesociete_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptesociete_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteController::showAction',));
                    }
                    not_comptesociete_show:

                    // comptesociete_edit
                    if (preg_match('#^/comptesociete/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_comptesociete_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptesociete_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteController::editAction',));
                    }
                    not_comptesociete_edit:

                    // comptesociete_delete
                    if (preg_match('#^/comptesociete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_comptesociete_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'comptesociete_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\CompteController::deleteAction',));
                    }
                    not_comptesociete_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/listeDesPatientsFiltre')) {
            // liste_des_patients_filtres
            if (preg_match('#^/listeDesPatientsFiltre/(?P<conv>[^/]++)/(?P<date>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_des_patients_filtres')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::listeDesPatientsAction',));
            }

            // liste_des_patients_filtres_soc
            if (0 === strpos($pathinfo, '/listeDesPatientsFiltreSoc') && preg_match('#^/listeDesPatientsFiltreSoc/(?P<conv>[^/]++)/(?P<date>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_des_patients_filtres_soc')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::listeDesPatientsSocAction',));
            }

        }

        if (0 === strpos($pathinfo, '/facture/tarif')) {
            // facture_tarif_index
            if ('/facture/tarif' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_facture_tarif_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'facture_tarif_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_facture_tarif_index;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::indexAction',  '_route' => 'facture_tarif_index',);
            }
            not_facture_tarif_index:

            // facture_tarif_new
            if ('/facture/tarif/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_facture_tarif_new;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::newAction',  '_route' => 'facture_tarif_new',);
            }
            not_facture_tarif_new:

            // facture_tarif_show
            if (preg_match('#^/facture/tarif/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_facture_tarif_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_tarif_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::showAction',));
            }
            not_facture_tarif_show:

            // facture_tarif_edit
            if (preg_match('#^/facture/tarif/(?P<fact>[^/]++)/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_facture_tarif_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_tarif_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::editAction',));
            }
            not_facture_tarif_edit:

            // facture_tarif_delete
            if (preg_match('#^/facture/tarif/(?P<fact>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_tarif_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::deleteAction',));
            }

            // change-tarif
            if ('/facture/tarif/change-tarif' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\TarifController::changeTarif',  '_route' => 'change-tarif',);
            }

        }

        if (0 === strpos($pathinfo, '/visa')) {
            // visa_index
            if ('/visa' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_visa_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'visa_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_visa_index;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\VisaController::indexAction',  '_route' => 'visa_index',);
            }
            not_visa_index:

            // visa_new
            if ('/visa/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_visa_new;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\VisaController::newAction',  '_route' => 'visa_new',);
            }
            not_visa_new:

            // visa_show
            if (preg_match('#^/visa/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_visa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visa_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\VisaController::showAction',));
            }
            not_visa_show:

            // visa_edit
            if (preg_match('#^/visa/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_visa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visa_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\VisaController::editAction',));
            }
            not_visa_edit:

            // visa_delete
            if (preg_match('#^/visa/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_visa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visa_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\VisaController::deleteAction',));
            }
            not_visa_delete:

        }

        if (0 === strpos($pathinfo, '/requisition')) {
            // requisition_index
            if ('/requisition' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_requisition_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'requisition_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_requisition_index;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::indexAction',  '_route' => 'requisition_index',);
            }
            not_requisition_index:

            // requisition_show
            if (preg_match('#^/requisition/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_requisition_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisition_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::showAction',));
            }
            not_requisition_show:

            // requisition_new
            if ('/requisition/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisition_new;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::newAction',  '_route' => 'requisition_new',);
            }
            not_requisition_new:

            // requisition_edit
            if (preg_match('#^/requisition/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisition_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisition_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::editAction',));
            }
            not_requisition_edit:

            // requisition_approuver
            if (preg_match('#^/requisition/(?P<id>[^/]++)/approuver$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisition_approuver;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisition_approuver')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::approuverRequisitionAction',));
            }
            not_requisition_approuver:

            // requisition_livrer
            if (preg_match('#^/requisition/(?P<id>[^/]++)/livrer$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisition_livrer;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisition_livrer')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::livrerRequisitionAction',));
            }
            not_requisition_livrer:

            // requisition_delete
            if (preg_match('#^/requisition/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_requisition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisition_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\RequisitionController::deleteAction',));
            }
            not_requisition_delete:

        }

        if (0 === strpos($pathinfo, '/message')) {
            // message_index
            if ('/message' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_message_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'message_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_message_index;
                }

                return array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\MessageController::indexAction',  '_route' => 'message_index',);
            }
            not_message_index:

            // message_show
            if (preg_match('#^/message/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_message_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\MessageController::showAction',));
            }
            not_message_show:

            // message_new
            if ('/message/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_message_new;
                }

                return array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\MessageController::newAction',  '_route' => 'message_new',);
            }
            not_message_new:

            // message_edit
            if (preg_match('#^/message/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_message_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_edit')), array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\MessageController::editAction',));
            }
            not_message_edit:

            // message_delete
            if (preg_match('#^/message/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_message_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\MessageController::deleteAction',));
            }
            not_message_delete:

        }

        // hostoo_msg_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_hostoo_msg_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'hostoo_msg_homepage');
            }

            return array (  '_controller' => 'hostoo\\MsgBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hostoo_msg_homepage',);
        }
        not_hostoo_msg_homepage:

        if (0 === strpos($pathinfo, '/ordonnance_med')) {
            // ordonnance_med_index
            if ('/ordonnance_med' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_ordonnance_med_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'ordonnance_med_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnance_med_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::indexAction',  '_route' => 'ordonnance_med_index',);
            }
            not_ordonnance_med_index:

            // ordonnance_med_show
            if (preg_match('#^/ordonnance_med/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnance_med_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::showAction',));
            }
            not_ordonnance_med_show:

            // ordonnance_med_print
            if (preg_match('#^/ordonnance_med/(?P<id>[^/]++)/print$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ordonnance_med_print;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_print')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::printOrdonnanceAction',));
            }
            not_ordonnance_med_print:

            if (0 === strpos($pathinfo, '/ordonnance_med/new')) {
                // ordonnance_med_new
                if (preg_match('#^/ordonnance_med/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ordonnance_med_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_new')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::newAction',));
                }
                not_ordonnance_med_new:

                // ordonnance_med_newnrs
                if (0 === strpos($pathinfo, '/ordonnance_med/newNrs') && preg_match('#^/ordonnance_med/newNrs/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ordonnance_med_newnrs;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_newnrs')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::newNrsAction',));
                }
                not_ordonnance_med_newnrs:

            }

            // ordonnance_med_edit
            if (preg_match('#^/ordonnance_med/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ordonnance_med_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::editAction',));
            }
            not_ordonnance_med_edit:

            // ordonnance_med_delete
            if (preg_match('#^/ordonnance_med/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ordonnance_med_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_med_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\OrdonnanceController::deleteAction',));
            }
            not_ordonnance_med_delete:

        }

        // ramsey_tag_homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_ramsey_tag_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'ramsey_tag_homepage');
            }

            return array (  '_controller' => 'Ramsey\\TagBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ramsey_tag_homepage',);
        }
        not_ramsey_tag_homepage:

        if (0 === strpos($pathinfo, '/req_article')) {
            // req_article_index
            if ('/req_article' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_req_article_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'req_article_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_req_article_index;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::indexAction',  '_route' => 'req_article_index',);
            }
            not_req_article_index:

            // req_article_liste
            if ('/req_article' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_req_article_liste;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'req_article_liste');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_req_article_liste;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::listeAction',  '_route' => 'req_article_liste',);
            }
            not_req_article_liste:

            // req_article_show
            if (preg_match('#^/req_article/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_req_article_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'req_article_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::showAction',));
            }
            not_req_article_show:

            // req_article_new
            if ('/req_article/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_req_article_new;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::newAction',  '_route' => 'req_article_new',);
            }
            not_req_article_new:

            // req_article_edit
            if (preg_match('#^/req_article/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_req_article_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'req_article_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::editAction',));
            }
            not_req_article_edit:

            // req_article_delete
            if (preg_match('#^/req_article/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_req_article_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'req_article_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::deleteAction',));
            }
            not_req_article_delete:

            // article_correct_stock
            if (preg_match('#^/req_article/(?P<id>[^/]++)/correctstock$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_article_correct_stock;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_correct_stock')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ArticleController::corrigerStockProduitAction',));
            }
            not_article_correct_stock:

        }

        if (0 === strpos($pathinfo, '/lesbanques')) {
            // lesbanques_index
            if ('/lesbanques' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_lesbanques_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'lesbanques_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lesbanques_index;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\LesBanquesController::indexAction',  '_route' => 'lesbanques_index',);
            }
            not_lesbanques_index:

            // lesbanques_show
            if (preg_match('#^/lesbanques/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lesbanques_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesbanques_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\LesBanquesController::showAction',));
            }
            not_lesbanques_show:

            // lesbanques_new
            if ('/lesbanques/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_lesbanques_new;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\LesBanquesController::newAction',  '_route' => 'lesbanques_new',);
            }
            not_lesbanques_new:

            // lesbanques_edit
            if (preg_match('#^/lesbanques/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_lesbanques_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesbanques_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\LesBanquesController::editAction',));
            }
            not_lesbanques_edit:

            // lesbanques_delete
            if (preg_match('#^/lesbanques/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_lesbanques_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesbanques_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\LesBanquesController::deleteAction',));
            }
            not_lesbanques_delete:

        }

        if (0 === strpos($pathinfo, '/b')) {
            if (0 === strpos($pathinfo, '/banque')) {
                // banque_index
                if ('/banque' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_banque_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'banque_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banque_index;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BanqueController::indexAction',  '_route' => 'banque_index',);
                }
                not_banque_index:

                // banque_show
                if (preg_match('#^/banque/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_banque_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BanqueController::showAction',));
                }
                not_banque_show:

                // banque_new
                if ('/banque/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banque_new;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BanqueController::newAction',  '_route' => 'banque_new',);
                }
                not_banque_new:

                // banque_edit
                if (preg_match('#^/banque/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_banque_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BanqueController::editAction',));
                }
                not_banque_edit:

                // banque_delete
                if (preg_match('#^/banque/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_banque_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'banque_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BanqueController::deleteAction',));
                }
                not_banque_delete:

            }

            if (0 === strpos($pathinfo, '/becaisse')) {
                // becaisse_index
                if ('/becaisse' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_becaisse_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'becaisse_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_becaisse_index;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BecaisseController::indexAction',  '_route' => 'becaisse_index',);
                }
                not_becaisse_index:

                // becaisse_show
                if (preg_match('#^/becaisse/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_becaisse_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'becaisse_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BecaisseController::showAction',));
                }
                not_becaisse_show:

                // becaisse_new
                if ('/becaisse/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_becaisse_new;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BecaisseController::newAction',  '_route' => 'becaisse_new',);
                }
                not_becaisse_new:

                // becaisse_edit
                if (preg_match('#^/becaisse/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_becaisse_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'becaisse_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BecaisseController::editAction',));
                }
                not_becaisse_edit:

                // becaisse_delete
                if (preg_match('#^/becaisse/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_becaisse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'becaisse_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\BecaisseController::deleteAction',));
                }
                not_becaisse_delete:

            }

        }

        if (0 === strpos($pathinfo, '/gestion')) {
            if (0 === strpos($pathinfo, '/gestion/rapportcaissejr')) {
                // rapportcaissejr_index
                if ('/gestion/rapportcaissejr' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_rapportcaissejr_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'rapportcaissejr_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rapportcaissejr_index;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::indexAction',  '_route' => 'rapportcaissejr_index',);
                }
                not_rapportcaissejr_index:

                // rapportcaissejr_show
                if (preg_match('#^/gestion/rapportcaissejr/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rapportcaissejr_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportcaissejr_show')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::showAction',));
                }
                not_rapportcaissejr_show:

                // rapportcaissejr_new
                if ('/gestion/rapportcaissejr/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_rapportcaissejr_new;
                    }

                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::newAction',  '_route' => 'rapportcaissejr_new',);
                }
                not_rapportcaissejr_new:

                // rapportcaissejr_edit
                if (preg_match('#^/gestion/rapportcaissejr/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_rapportcaissejr_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportcaissejr_edit')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::editAction',));
                }
                not_rapportcaissejr_edit:

                // rapportcaissejr_delete
                if (preg_match('#^/gestion/rapportcaissejr/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_rapportcaissejr_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapportcaissejr_delete')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::deleteAction',));
                }
                not_rapportcaissejr_delete:

            }

            // hostoo_gestion_prop
            if (0 === strpos($pathinfo, '/gestion/proprietaire') && preg_match('#^/gestion/proprietaire/(?P<id>[^/]++)/voir$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_gestion_prop')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\DefaultController::afficherProprietaireAction',));
            }

            // nouvelle_convention
            if ('/gestion/nouvelleConvention' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\GestionController::nouvelleConventionAction',  '_route' => 'nouvelle_convention',);
            }

            // liste_conventions
            if ('/gestion/listeConventions' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\GestionController::listeConventionsAction',  '_route' => 'liste_conventions',);
            }

            // modifier_convention
            if ('/gestion/modifierConvention' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\GestionController::modifierConventionAction',  '_route' => 'modifier_convention',);
            }

            if (0 === strpos($pathinfo, '/gestion/ajouter')) {
                // ajouter_un_prix
                if (0 === strpos($pathinfo, '/gestion/ajouterUnPrix') && preg_match('#^/gestion/ajouterUnPrix/(?P<acte>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_un_prix')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\PrixController::ajouterUnPrixAction',));
                }

                // ajouter_des_prix
                if (0 === strpos($pathinfo, '/gestion/ajouterDesPrix') && preg_match('#^/gestion/ajouterDesPrix/(?P<convention>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_des_prix')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\PrixController::ajouterDesPrixAction',));
                }

            }

            if (0 === strpos($pathinfo, '/gestion/modifier')) {
                // modifier_des_prix
                if (0 === strpos($pathinfo, '/gestion/modifierDesPrix') && preg_match('#^/gestion/modifierDesPrix/(?P<convention>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_des_prix')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\PrixController::modifierDesPrixAction',));
                }

                // modifier_un_prix
                if ('/gestion/modifierUnPrix' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\PrixController::modifierUnPrixAction',  '_route' => 'modifier_un_prix',);
                }

            }

            // tableau_de_bord
            if ('/gestion/tableauDeBord' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::tableauDeBordAction',  '_route' => 'tableau_de_bord',);
            }

            // _actes_factures
            if ('/gestion/ActesFactures' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::ActesFacturesAction',  '_route' => '_actes_factures',);
            }

            // _conventions_des_entreprises
            if ('/gestion/ConventionsDesEntreprises' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::ConventionsDesEntreprisesAction',  '_route' => '_conventions_des_entreprises',);
            }

            // details_sur_entreprises
            if (0 === strpos($pathinfo, '/gestion/detailsSurEntreprises') && preg_match('#^/gestion/detailsSurEntreprises/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_sur_entreprises')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::detailsSurEntreprisesAction',));
            }

            // activite_journaliere
            if ('/gestion/activiteJournaliere' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::activiteJournaliereAction',  '_route' => 'activite_journaliere',);
            }

            // patients_recus
            if ('/gestion/patientsRecus' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::patientsRecusAction',  '_route' => 'patients_recus',);
            }

            // caisses_hostoo
            if ('/gestion/caisse-hostoo' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::caisseAction',  '_route' => 'caisses_hostoo',);
            }

            // caisses_performances
            if ('/gestion/performances-hostoo' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_caisses_performances;
                }

                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::performancesAction',  '_route' => 'caisses_performances',);
            }
            not_caisses_performances:

            // caisses_requisitions
            if ('/gestion/requisitions-hostoo' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\ReportingController::requisitionsAction',  '_route' => 'caisses_requisitions',);
            }

            // switch_entreprise
            if (0 === strpos($pathinfo, '/gestion/switch_entreprise') && preg_match('#^/gestion/switch_entreprise/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'switch_entreprise')), array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\GestionController::switchEntrepriseAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pharmacie')) {
            // hostoo_pharmacie_homepage
            if ('/pharmacie/liste-produits-et-gestion' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::indexAction',  '_route' => 'hostoo_pharmacie_homepage',);
            }

            // hostoo_pharmacie_tb
            if ('/pharmacie/tableau-de-bord' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::TBPharmacieAction',  '_route' => 'hostoo_pharmacie_tb',);
            }

            if (0 === strpos($pathinfo, '/pharmacie/ajout-')) {
                // hp_ajouterproduit
                if ('/pharmacie/ajout-produit' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajouterProduitAction',  '_route' => 'hp_ajouterproduit',);
                }

                // hp_ajoutercatt
                if ('/pharmacie/ajout-catt' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajouterCattAction',  '_route' => 'hp_ajoutercatt',);
                }

            }

            // hp_listeproduits
            if ('/pharmacie/liste-produits' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::listeProduitsAction',  '_route' => 'hp_listeproduits',);
            }

            if (0 === strpos($pathinfo, '/pharmacie/produit')) {
                // hp_produit
                if (preg_match('#^/pharmacie/produit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_produit')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::voirProduitAction',));
                }

                // hp_modifproduit
                if (0 === strpos($pathinfo, '/pharmacie/produit-modifier') && preg_match('#^/pharmacie/produit\\-modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_modifproduit')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::modifierProduitAction',));
                }

            }

            if (0 === strpos($pathinfo, '/pharmacie/aj')) {
                if (0 === strpos($pathinfo, '/pharmacie/ajout-')) {
                    // hp_ajouternature
                    if ('/pharmacie/ajout-nature' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajouterNatureAction',  '_route' => 'hp_ajouternature',);
                    }

                    // hp_ajouterstock
                    if (0 === strpos($pathinfo, '/pharmacie/ajout-stock') && preg_match('#^/pharmacie/ajout\\-stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_ajouterstock')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajouterStockAction',));
                    }

                }

                // hp_ajusterstock
                if (0 === strpos($pathinfo, '/pharmacie/ajuste-stock') && preg_match('#^/pharmacie/ajuste\\-stock/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_ajusterstock')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajusterStockAction',));
                }

            }

            // hostoo_phar_dash
            if ('/pharmacie/dash' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::indexAction',  '_route' => 'hostoo_phar_dash',);
            }

            // hp_ajouteritem
            if (0 === strpos($pathinfo, '/pharmacie/ajout-item') && preg_match('#^/pharmacie/ajout\\-item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_ajouteritem')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::ajouterItemAction',));
            }

            // hp_supprimeritem
            if (0 === strpos($pathinfo, '/pharmacie/supp-item') && preg_match('#^/pharmacie/supp\\-item/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_supprimeritem')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::supprimerItemAction',));
            }

            // hp_annuleritems
            if ('/pharmacie/annuler-items' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::annulerItemsAction',  '_route' => 'hp_annuleritems',);
            }

            if (0 === strpos($pathinfo, '/pharmacie/rapports')) {
                // hp_rapports
                if ('/pharmacie/rapports' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::rapportsAction',  '_route' => 'hp_rapports',);
                }

                // hp_rapports_conso
                if ('/pharmacie/rapports-des-conso' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::rapportsConsoAction',  '_route' => 'hp_rapports_conso',);
                }

            }

            // hp_livreproduits
            if (0 === strpos($pathinfo, '/pharmacie/livraison-produits') && preg_match('#^/pharmacie/livraison\\-produits/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_livreproduits')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::livrerProduitsAction',));
            }

            // hp_ordonnance
            if (0 === strpos($pathinfo, '/pharmacie/ordonnance') && preg_match('#^/pharmacie/ordonnance/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hp_ordonnance')), array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\DefaultController::ordonnanceAction',));
            }

            // hp_stocks
            if ('/pharmacie/stocks-stocks' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\PharmacieBundle\\Controller\\PharmacieController::stockEtaTAction',  '_route' => 'hp_stocks',);
            }

        }

        // hostoo_rdv_homepage
        if ('/rdv' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hostoo_rdv_homepage',);
        }

        // throw_autorization
        if ('/non-autorise' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::throwAuthorizationAction',  '_route' => 'throw_autorization',);
        }

        // throw_direction
        if ('/direction' === $pathinfo) {
            return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\DefaultController::directionAction',  '_route' => 'throw_direction',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // hostoo_user_homepage
            if ('/admin' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_hostoo_user_homepage;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'hostoo_user_homepage');
                }

                return array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::listeUsersAction',  '_route' => 'hostoo_user_homepage',);
            }
            not_hostoo_user_homepage:

            // hostoo_user_creeruser
            if ('/admin/creeuser' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::creeUserAction',  '_route' => 'hostoo_user_creeruser',);
            }

            // hostoo_user_edituser
            if (0 === strpos($pathinfo, '/admin/edituser') && preg_match('#^/admin/edituser/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_user_edituser')), array (  '_controller' => 'hostoo\\UserBundle\\Controller\\DefaultController::editUserAction',));
            }

        }

        if (0 === strpos($pathinfo, '/welcome')) {
            if (0 === strpos($pathinfo, '/welcome/enregistrer-patient')) {
                // hostoo_sante_savepatient
                if ('/welcome/enregistrer-patient' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::enregistrerPatientAction',  '_route' => 'hostoo_sante_savepatient',);
                }

                // hostoo_sante_savepatientrc
                if ('/welcome/enregistrer-patientrc' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::enregistrerPatientRCAction',  '_route' => 'hostoo_sante_savepatientrc',);
                }

            }

            // hostoo_sante_editpatientrc
            if (0 === strpos($pathinfo, '/welcome/modifier-patientrc') && preg_match('#^/welcome/modifier\\-patientrc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_editpatientrc')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::modifierPatientRCAction',));
            }

            // reception_t_b
            if ('/welcome/receptionTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::receptionTBAction',  '_route' => 'reception_t_b',);
            }

            // hostoo_sante_fichepatient
            if ('/welcome/fiche-du-patient' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::fichePatientAction',  '_route' => 'hostoo_sante_fichepatient',);
            }

            // hostoo_sante_voirpatient
            if (0 === strpos($pathinfo, '/welcome/voir-le-patient') && preg_match('#^/welcome/voir\\-le\\-patient/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_voirpatient')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::voirPatientAction',));
            }

            if (0 === strpos($pathinfo, '/welcome/liste-des-patients')) {
                // hostoo_sante_listepatients
                if ('/welcome/liste-des-patients' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::listePatientsAction',  '_route' => 'hostoo_sante_listepatients',);
                }

                if (0 === strpos($pathinfo, '/welcome/liste-des-patients-')) {
                    // hostoo_sante_listepatientsprives
                    if ('/welcome/liste-des-patients-prives' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::listePatientsPrivesAction',  '_route' => 'hostoo_sante_listepatientsprives',);
                    }

                    // hostoo_sante_listepatientsconventionnes
                    if ('/welcome/liste-des-patients-conventionnes' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::listePatientsConventionnesAction',  '_route' => 'hostoo_sante_listepatientsconventionnes',);
                    }

                }

            }

            // hostoo_sante_addtypeclient
            if ('/welcome/typeclients' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypesController::ajouterTCAction',  '_route' => 'hostoo_sante_addtypeclient',);
            }

            if (0 === strpos($pathinfo, '/welcome/formules')) {
                // hostoo_sante_addformule
                if ('/welcome/formules' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypesController::ajouterFormuleAction',  '_route' => 'hostoo_sante_addformule',);
                }

                // hostoo_sante_editionformule
                if ('/welcome/formules-edition' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypesController::EditionFormuleAction',  '_route' => 'hostoo_sante_editionformule',);
                }

            }

            // hostoo_sante_lireepisode
            if (0 === strpos($pathinfo, '/welcome/lire-un-episode') && preg_match('#^/welcome/lire\\-un\\-episode/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_lireepisode')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::lireEpisodeAction',));
            }

            // hostoo_sante_reception
            if ('/welcome/reception' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\DefaultController::receptionAction',  '_route' => 'hostoo_sante_reception',);
            }

            // hostoo_ajouter_parent
            if (0 === strpos($pathinfo, '/welcome/ajouter-dependant') && preg_match('#^/welcome/ajouter\\-dependant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_ajouter_parent')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PatientController::ajouterParenteAction',));
            }

            // notpatient
            if (0 === strpos($pathinfo, '/welcome/notpatient') && preg_match('#^/welcome/notpatient/(?P<route>test)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notpatient')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\NotificationController::ajouterPatientAction',));
            }

            // tarifs_med
            if ('/welcome/tarifs' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ActesController::listeActesRCAction',  '_route' => 'tarifs_med',);
            }

            // recherche_patient
            if ('/welcome/recherche_patient' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\DefaultController::recherchePatientAction',  '_route' => 'recherche_patient',);
            }

            // hostoo_sante_creerdv
            if ('/welcome/creerunrdvpatient' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::creerUnRDVPatientAction',  '_route' => 'hostoo_sante_creerdv',);
            }

            // attrib_rdv
            if ('/welcome/attribueraumed' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::attribuerAuMedAction',  '_route' => 'attrib_rdv',);
            }

        }

        if (0 === strpos($pathinfo, '/symptomes')) {
            // symptomes_index
            if ('/symptomes' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_symptomes_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'symptomes_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_symptomes_index;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\SymptomesController::indexAction',  '_route' => 'symptomes_index',);
            }
            not_symptomes_index:

            // symptomes_show
            if (preg_match('#^/symptomes/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_symptomes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'symptomes_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\SymptomesController::showAction',));
            }
            not_symptomes_show:

            // symptomes_new
            if ('/symptomes/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_symptomes_new;
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\SymptomesController::newAction',  '_route' => 'symptomes_new',);
            }
            not_symptomes_new:

            // symptomes_edit
            if (preg_match('#^/symptomes/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_symptomes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'symptomes_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\SymptomesController::editAction',));
            }
            not_symptomes_edit:

            // symptomes_delete
            if (preg_match('#^/symptomes/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_symptomes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'symptomes_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\SymptomesController::deleteAction',));
            }
            not_symptomes_delete:

        }

        if (0 === strpos($pathinfo, '/laboratoire')) {
            // hostoo_labo_dash
            if ('/laboratoire/dash' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::indexAction',  '_route' => 'hostoo_labo_dash',);
            }

            // ajouter_resultat
            if (0 === strpos($pathinfo, '/laboratoire/ajouter-resultat') && preg_match('#^/laboratoire/ajouter\\-resultat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_resultat')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::ajouterResultatAction',));
            }

            // valider_resultat
            if (0 === strpos($pathinfo, '/laboratoire/valider-resultat') && preg_match('#^/laboratoire/valider\\-resultat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_resultat')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\LaboratoireController::validerResultatAction',));
            }

        }

        if (0 === strpos($pathinfo, '/imagerie')) {
            // hostoo_img_dash
            if ('/imagerie/dash' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::indexAction',  '_route' => 'hostoo_img_dash',);
            }

            // ajouter_resultati
            if (0 === strpos($pathinfo, '/imagerie/ajouter-resultatI') && preg_match('#^/imagerie/ajouter\\-resultatI/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter_resultati')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::ajouterResultatAction',));
            }

            // valider_resultati
            if (0 === strpos($pathinfo, '/imagerie/valider-resultatI') && preg_match('#^/imagerie/valider\\-resultatI/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_resultati')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::validerResultatAction',));
            }

        }

        if (0 === strpos($pathinfo, '/welcome')) {
            // hostoo_sante_ajoutercte
            if (0 === strpos($pathinfo, '/welcome/ajoute_acte') && preg_match('#^/welcome/ajoute_acte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_ajoutercte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::ajouterActeAction',));
            }

            // hostoo_sante_suppcte
            if (0 === strpos($pathinfo, '/welcome/supprimer_acte') && preg_match('#^/welcome/supprimer_acte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_suppcte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::supprimerActeAction',));
            }

            // hostoo_sante_ajouterctelbo
            if (0 === strpos($pathinfo, '/welcome/ajoute_actelbo') && preg_match('#^/welcome/ajoute_actelbo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_ajouterctelbo')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::ajouterActelboAction',));
            }

            // hostoo_sante_suppctelbo
            if (0 === strpos($pathinfo, '/welcome/supprimer_actelbo') && preg_match('#^/welcome/supprimer_actelbo/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_suppctelbo')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::supprimerActelboAction',));
            }

            // hostoo_sante_factureactes
            if (0 === strpos($pathinfo, '/welcome/factures_actes') && preg_match('#^/welcome/factures_actes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_factureactes')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::factureActesAction',));
            }

            // hostoo_sante_resetactes
            if (0 === strpos($pathinfo, '/welcome/reset_actes') && preg_match('#^/welcome/reset_actes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_resetactes')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::resetActesAction',));
            }

            // hostoo_sante_attrrdv
            if (0 === strpos($pathinfo, '/welcome/attribuer-rdv') && preg_match('#^/welcome/attribuer\\-rdv/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_attrrdv')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::attribuerRDVAction',));
            }

            // hostoo_sante_tousrdv
            if ('/welcome/tous-rdvs' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::tousRDVAction',  '_route' => 'hostoo_sante_tousrdv',);
            }

            // hostoo_service_ajouter
            if ('/welcome/ajouter-service' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ServiceController::ajouterServiceAction',  '_route' => 'hostoo_service_ajouter',);
            }

            // hostoo_sante_lesactesdupatientparepisode
            if (0 === strpos($pathinfo, '/welcome/les_actes_du_patient') && preg_match('#^/welcome/les_actes_du_patient/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_lesactesdupatientparepisode')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::voirActesEpisodeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/caisse')) {
            if (0 === strpos($pathinfo, '/caisse/liste-')) {
                // hostoo_sante_listeactes
                if ('/caisse/liste-des-actes' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::listeActesAction',  '_route' => 'hostoo_sante_listeactes',);
                }

                // caisse_medecins
                if ('/caisse/liste-medecins' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\GestionController::lesMedecinsAction',  '_route' => 'caisse_medecins',);
                }

                // hostoo_sante_listeactest
                if ('/caisse/liste-des-actes-toutes' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::listeActesToutesAction',  '_route' => 'hostoo_sante_listeactest',);
                }

            }

            // hostoo_sante_valideracte
            if (0 === strpos($pathinfo, '/caisse/valider-des-actes') && preg_match('#^/caisse/valider\\-des\\-actes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_valideracte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::validerActeAction',));
            }

            // hostoo_sante_soldeacte
            if (0 === strpos($pathinfo, '/caisse/solde-acte') && preg_match('#^/caisse/solde\\-acte/(?P<acte>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_soldeacte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::soldeActeAction',));
            }

            // hostoo_sante_bscaisse
            if ('/caisse/cree-bon-de-sortie-caisse' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::creeBSAction',  '_route' => 'hostoo_sante_bscaisse',);
            }

            if (0 === strpos($pathinfo, '/caisse/li')) {
                // hostoo_sante_bs
                if (0 === strpos($pathinfo, '/caisse/lire-bs') && preg_match('#^/caisse/lire\\-bs/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_bs')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::lireBSAction',));
                }

                // hostoo_sante_bsliste
                if ('/caisse/liste-bs' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::listeBSAction',  '_route' => 'hostoo_sante_bsliste',);
                }

            }

            // hostoo_caisse_dash
            if ('/caisse/dash-bs' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::dashAction',  '_route' => 'hostoo_caisse_dash',);
            }

            // hostoo_caisse_mettredevise
            if ('/caisse/mettredevise' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::mettreDeviseAction',  '_route' => 'hostoo_caisse_mettredevise',);
            }

            // hostoo_caisse_taux
            if ('/caisse/nouveauTaux' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::nouveauTauxAction',  '_route' => 'hostoo_caisse_taux',);
            }

            // hostoo_caisse_tb
            if ('/caisse/caisseTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::caisseTBAction',  '_route' => 'hostoo_caisse_tb',);
            }

            // print_facture
            if (0 === strpos($pathinfo, '/caisse/print-facture') && preg_match('#^/caisse/print\\-facture/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_facture')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::printFactureAction',));
            }

            // lescomissions_med
            if (0 === strpos($pathinfo, '/caisse/comissions-med') && preg_match('#^/caisse/comissions\\-med/(?P<medecin>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lescomissions_med')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::lesComissionsAction',));
            }

            // print_som
            if ('/caisse/print-som' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_print_som;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'print_som');
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::sommeBSusdAction',  '_route' => 'print_som',);
            }
            not_print_som:

            // rapport_du_mois
            if ('/caisse/rapport' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\rapportCaisseJrController::moisRapportAction',  '_route' => 'rapport_du_mois',);
            }

        }

        if (0 === strpos($pathinfo, '/dispatcher')) {
            if (0 === strpos($pathinfo, '/dispatcher/listepatients-Prelevements')) {
                // hostoo_sante_listprelev
                if ('/dispatcher/listepatients-Prelevements' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::listePrelevementsAction',  '_route' => 'hostoo_sante_listprelev',);
                }

                // hostoo_sante_listprelevE
                if ('/dispatcher/listepatients-PrelevementsE' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::listePrelevementsEveryAction',  '_route' => 'hostoo_sante_listprelevE',);
                }

            }

            // hostoo_sante_ajoutersv
            if (0 === strpos($pathinfo, '/dispatcher/faire-Prelevements') && preg_match('#^/dispatcher/faire\\-Prelevements/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_ajoutersv')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::ajouterSVAction',));
            }

            // hostoo_rdv_attrrdv
            if (0 === strpos($pathinfo, '/dispatcher/attribuer-au-med') && preg_match('#^/dispatcher/attribuer\\-au\\-med/(?P<id>[^/]++)/(?P<episode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_rdv_attrrdv')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::attribuerRDVAction',));
            }

            // hostoo_rdv_oterrdv
            if (0 === strpos($pathinfo, '/dispatcher/oter-au-med') && preg_match('#^/dispatcher/oter\\-au\\-med/(?P<id>[^/]++)/(?P<episode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_rdv_oterrdv')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::oterRDVAction',));
            }

            // hostoo_rdv_medecinrdv
            if ('/dispatcher/rdv-medecins' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::tousRDVAction',  '_route' => 'hostoo_rdv_medecinrdv',);
            }

            // salle_des_soins_t_b
            if ('/dispatcher/salleDesSoinsTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::salleDesSoinsTBAction',  '_route' => 'salle_des_soins_t_b',);
            }

            // recupprev
            if ('/dispatcher/recup_prelev' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::recupererActesAction',  '_route' => 'recupprev',);
            }

            // hostoo_sante_creerdvd
            if ('/dispatcher/creerunrdvpatientd' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::creerUnRDVPatientdAction',  '_route' => 'hostoo_sante_creerdvd',);
            }

            // attrib_rdvd
            if ('/dispatcher/attribueraumedd' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::attribuerAuMeddAction',  '_route' => 'attrib_rdvd',);
            }

            // voirpatient_prel
            if (0 === strpos($pathinfo, '/dispatcher/voir_patient') && preg_match('#^/dispatcher/voir_patient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'voirpatient_prel')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::voirPatientAction',));
            }

            // actes_listes
            if ('/dispatcher/les_factures_de_caisse' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::listeActesNrsAction',  '_route' => 'actes_listes',);
            }

            // hostoo_sante_valideracte_nrs
            if (0 === strpos($pathinfo, '/dispatcher/valider-des-actes-nrs') && preg_match('#^/dispatcher/valider\\-des\\-actes\\-nrs/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_sante_valideracte_nrs')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CaisseController::validerActeNrsAction',));
            }

            // new_obsinf
            if (0 === strpos($pathinfo, '/dispatcher/newobsinf') && preg_match('#^/dispatcher/newobsinf/(?P<fact>[^/]++)/(?P<act>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_obsinf')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::newObsInfAction',));
            }

        }

        if (0 === strpos($pathinfo, '/medecin')) {
            // hostoo_sante_createrdv
            if ('/medecin/creerunrdv' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::creerUnRDVAction',  '_route' => 'hostoo_sante_createrdv',);
            }

            // hostoo_sante_patientsattente
            if ('/medecin/patients-en-attente' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::patientsEnAttenteAction',  '_route' => 'hostoo_sante_patientsattente',);
            }

            // hostoo_sante_sespatients
            if ('/medecin/ses-patients' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::listePatientAction',  '_route' => 'hostoo_sante_sespatients',);
            }

            // hostoo_med_patient
            if (0 === strpos($pathinfo, '/medecin/la-fiche-du-patient') && preg_match('#^/medecin/la\\-fiche\\-du\\-patient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_patient')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::fichePatientAction',));
            }

            // hostoo_med_lireepisode
            if (0 === strpos($pathinfo, '/medecin/episode-son-patient') && preg_match('#^/medecin/episode\\-son\\-patient/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_lireepisode')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::lireEpisodeAction',));
            }

            // hostoo_med_addanamnese
            if (0 === strpos($pathinfo, '/medecin/anamnese') && preg_match('#^/medecin/anamnese/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_addanamnese')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::addAnamneseAction',));
            }

            // hostoo_med_adddiagnostic
            if (0 === strpos($pathinfo, '/medecin/diagnostic') && preg_match('#^/medecin/diagnostic/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_adddiagnostic')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::addDiagnosticAction',));
            }

            // hostoo_med_addrclinic
            if (0 === strpos($pathinfo, '/medecin/rclinic') && preg_match('#^/medecin/rclinic/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_addrclinic')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::addRClinicAction',));
            }

            // hostoo_med_ajoutercte
            if ('/medecin/ajoute_actem' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::ajouterActeAction',  '_route' => 'hostoo_med_ajoutercte',);
            }

            // hostoo_med_suppcte
            if (0 === strpos($pathinfo, '/medecin/supprimer_actem') && preg_match('#^/medecin/supprimer_actem/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_suppcte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::supprimerActeAction',));
            }

            // hostoo_med_ajouterimg
            if ('/medecin/ajoute_img' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::ajouterImgAction',  '_route' => 'hostoo_med_ajouterimg',);
            }

            // hostoo_med_suppimg
            if (0 === strpos($pathinfo, '/medecin/supprimer_img') && preg_match('#^/medecin/supprimer_img/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_suppimg')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::supprimerImgAction',));
            }

            if (0 === strpos($pathinfo, '/medecin/ajoute_p')) {
                // hostoo_med_ajoutermed
                if (0 === strpos($pathinfo, '/medecin/ajoute_phar') && preg_match('#^/medecin/ajoute_phar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_ajoutermed')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::ajouterMedAction',));
                }

                // hostoo_med_ajouterprod
                if ('/medecin/ajoute_prod' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::ajouterProdAction',  '_route' => 'hostoo_med_ajouterprod',);
                }

            }

            // hostoo_med_suppmed
            if (0 === strpos($pathinfo, '/medecin/supprimer_phar') && preg_match('#^/medecin/supprimer_phar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_suppmed')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::supprimerMedAction',));
            }

            // hostoo_med_ajouterautre
            if ('/medecin/ajoute_autre' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::ajouterAutresAction',  '_route' => 'hostoo_med_ajouterautre',);
            }

            // hostoo_med_suppautre
            if (0 === strpos($pathinfo, '/medecin/supprimer_divers') && preg_match('#^/medecin/supprimer_divers/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_suppautre')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::supprimerAutresAction',));
            }

            // hostoo_med_factureactes
            if ('/medecin/facturer-actes-docteur' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::factureActesAction',  '_route' => 'hostoo_med_factureactes',);
            }

            // hostoo_med_resetactes
            if ('/medecin/annuler-toutes-prescriptions' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::resetAction',  '_route' => 'hostoo_med_resetactes',);
            }

            // medecin_tb
            if ('/medecin/tableau-de-bords-medecin' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::TBAction',  '_route' => 'medecin_tb',);
            }

            // liste_patients_med
            if ('/medecin/liste-des-patients-med' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::lesPatientsAction',  '_route' => 'liste_patients_med',);
            }

            // afficher_dossier_patient
            if (0 === strpos($pathinfo, '/medecin/afficher_dossier') && preg_match('#^/medecin/afficher_dossier/(?P<patient>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_dossier_patient')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\MedecinController::dossierDuPatientAction',));
            }

            // patients_du_medecin
            if ('/medecin/patients-recus-par-le-medecins' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RDVController::patientsRdvsAction',  '_route' => 'patients_du_medecin',);
            }

            // hostoo_med_ajoutersv
            if (0 === strpos($pathinfo, '/medecin/faire-Prelevementsmed') && preg_match('#^/medecin/faire\\-Prelevementsmed/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hostoo_med_ajoutersv')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\PrelevementController::ajouterSVMedAction',));
            }

            if (0 === strpos($pathinfo, '/medecin/typeantecedent')) {
                // typeantecedent_index
                if ('/medecin/typeantecedent' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_typeantecedent_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'typeantecedent_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeantecedent_index;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypeAntecedentController::indexAction',  '_route' => 'typeantecedent_index',);
                }
                not_typeantecedent_index:

                // typeantecedent_show
                if (preg_match('#^/medecin/typeantecedent/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeantecedent_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeantecedent_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypeAntecedentController::showAction',));
                }
                not_typeantecedent_show:

                // typeantecedent_new
                if ('/medecin/typeantecedent/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeantecedent_new;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypeAntecedentController::newAction',  '_route' => 'typeantecedent_new',);
                }
                not_typeantecedent_new:

                // typeantecedent_edit
                if (preg_match('#^/medecin/typeantecedent/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeantecedent_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeantecedent_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypeAntecedentController::editAction',));
                }
                not_typeantecedent_edit:

                // typeantecedent_delete
                if (preg_match('#^/medecin/typeantecedent/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typeantecedent_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeantecedent_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TypeAntecedentController::deleteAction',));
                }
                not_typeantecedent_delete:

            }

            if (0 === strpos($pathinfo, '/medecin/anamnese')) {
                // anamnese_index
                if ('/medecin/anamnese' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_anamnese_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'anamnese_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_anamnese_index;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AnamneseController::indexAction',  '_route' => 'anamnese_index',);
                }
                not_anamnese_index:

                // anamnese_show
                if (preg_match('#^/medecin/anamnese/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_anamnese_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anamnese_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AnamneseController::showAction',));
                }
                not_anamnese_show:

                // anamnese_new
                if (0 === strpos($pathinfo, '/medecin/anamnese/new') && preg_match('#^/medecin/anamnese/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_anamnese_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anamnese_new')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AnamneseController::newAction',));
                }
                not_anamnese_new:

                // anamnese_edit
                if (preg_match('#^/medecin/anamnese/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_anamnese_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anamnese_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AnamneseController::editAction',));
                }
                not_anamnese_edit:

                // anamnese_delete
                if (preg_match('#^/medecin/anamnese/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_anamnese_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anamnese_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AnamneseController::deleteAction',));
                }
                not_anamnese_delete:

            }

            if (0 === strpos($pathinfo, '/medecin/examensphysiques')) {
                // examensphysiques_index
                if ('/medecin/examensphysiques' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_examensphysiques_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'examensphysiques_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_examensphysiques_index;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ExamensPhysiquesController::indexAction',  '_route' => 'examensphysiques_index',);
                }
                not_examensphysiques_index:

                // examensphysiques_show
                if (preg_match('#^/medecin/examensphysiques/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_examensphysiques_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examensphysiques_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ExamensPhysiquesController::showAction',));
                }
                not_examensphysiques_show:

                // examensphysiques_new
                if (0 === strpos($pathinfo, '/medecin/examensphysiques/new') && preg_match('#^/medecin/examensphysiques/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_examensphysiques_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examensphysiques_new')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ExamensPhysiquesController::newAction',));
                }
                not_examensphysiques_new:

                // examensphysiques_edit
                if (preg_match('#^/medecin/examensphysiques/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_examensphysiques_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examensphysiques_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ExamensPhysiquesController::editAction',));
                }
                not_examensphysiques_edit:

                // examensphysiques_delete
                if (preg_match('#^/medecin/examensphysiques/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_examensphysiques_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examensphysiques_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ExamensPhysiquesController::deleteAction',));
                }
                not_examensphysiques_delete:

            }

            if (0 === strpos($pathinfo, '/medecin/rdvmdc')) {
                // rdvmed_index
                if ('/medecin/rdvmdc' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_rdvmed_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'rdvmed_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rdvmed_index;
                    }

                    return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::indexAction',  '_route' => 'rdvmed_index',);
                }
                not_rdvmed_index:

                if (0 === strpos($pathinfo, '/medecin/rdvmdc/rdv-')) {
                    // rdvmed_show_today
                    if ('/medecin/rdvmdc/rdv-aujourdhui' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rdvmed_show_today;
                        }

                        return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::LesRDVTodayAction',  '_route' => 'rdvmed_show_today',);
                    }
                    not_rdvmed_show_today:

                    // rdvmed_show_tout
                    if ('/medecin/rdvmdc/rdv-tout' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rdvmed_show_tout;
                        }

                        return array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::LesRDVToutAction',  '_route' => 'rdvmed_show_tout',);
                    }
                    not_rdvmed_show_tout:

                }

                // rdvmed_list
                if (0 === strpos($pathinfo, '/medecin/rdvmdc/list-rdv') && preg_match('#^/medecin/rdvmdc/list\\-rdv/(?P<pat>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rdvmed_list;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvmed_list')), array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::listAction',));
                }
                not_rdvmed_list:

                // rdvmed_show
                if (preg_match('#^/medecin/rdvmdc/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rdvmed_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvmed_show')), array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::showAction',));
                }
                not_rdvmed_show:

                // rdvmed_new
                if (0 === strpos($pathinfo, '/medecin/rdvmdc/new') && preg_match('#^/medecin/rdvmdc/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rdvmed_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvmed_new')), array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::newAction',));
                }
                not_rdvmed_new:

                // rdvmed_edit
                if (preg_match('#^/medecin/rdvmdc/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_rdvmed_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvmed_edit')), array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::editAction',));
                }
                not_rdvmed_edit:

                // rdvmed_delete
                if (preg_match('#^/medecin/rdvmdc/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_rdvmed_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvmed_delete')), array (  '_controller' => 'hostoo\\RDVBundle\\Controller\\RDVMedController::deleteAction',));
                }
                not_rdvmed_delete:

            }

        }

        if (0 === strpos($pathinfo, '/public')) {
            if (0 === strpos($pathinfo, '/public/antecedent')) {
                // antecedent_index
                if ('/public/antecedent' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_antecedent_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'antecedent_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_antecedent_index;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::indexAction',  '_route' => 'antecedent_index',);
                }
                not_antecedent_index:

                // antecedent_show
                if (preg_match('#^/public/antecedent/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_antecedent_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_show')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::showAction',));
                }
                not_antecedent_show:

                // antecedent_new
                if ('/public/antecedent/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_antecedent_new;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::newAction',  '_route' => 'antecedent_new',);
                }
                not_antecedent_new:

                // antecedent_edit
                if (preg_match('#^/public/antecedent/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_antecedent_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_edit')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::editAction',));
                }
                not_antecedent_edit:

                // antecedent_delete
                if (preg_match('#^/public/antecedent/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_antecedent_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_delete')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::deleteAction',));
                }
                not_antecedent_delete:

                // antecedent_patient
                if (preg_match('#^/public/antecedent/(?P<pat>[^/]++)/sesantecedents$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_antecedent_patient;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_patient')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\AntecedentController::antecedentPatientAction',));
                }
                not_antecedent_patient:

            }

            // hostoo_sante_homepage
            if ('/public' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_hostoo_sante_homepage;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'hostoo_sante_homepage');
                }

                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'hostoo_sante_homepage',);
            }
            not_hostoo_sante_homepage:

            // _index
            if ('/public/indeximagerie' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImagerieController::IndexAction',  '_route' => '_index',);
            }

            if (0 === strpos($pathinfo, '/public/transactions')) {
                // transactions_conventionnees
                if ('/public/transactionsConventionnees' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::transactionsConventionneesAction',  '_route' => 'transactions_conventionnees',);
                }

                // transactions_privees
                if ('/public/transactionsPrivees' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::transactionsPriveesAction',  '_route' => 'transactions_privees',);
                }

            }

            if (0 === strpos($pathinfo, '/public/rapport')) {
                // rapport_intervalle_dates
                if ('/public/rapportIntervalleDates' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::rapportIntervalleDatesAction',  '_route' => 'rapport_intervalle_dates',);
                }

                if (0 === strpos($pathinfo, '/public/rapportTransactionsPa')) {
                    // rapport_transactions_patients
                    if ('/public/rapportTransactionsPatients' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::rapportTransactionsPatientsAction',  '_route' => 'rapport_transactions_patients',);
                    }

                    // rapport_transactions_par_societe
                    if ('/public/rapportTransactionsParSociete' === $pathinfo) {
                        return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::rapportTransactionsParSocieteAction',  '_route' => 'rapport_transactions_par_societe',);
                    }

                }

                // rapport_detaille_patient
                if ('/public/rapportDetaillePatient' === $pathinfo) {
                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\RapportController::rapportDetaillePatientAction',  '_route' => 'rapport_detaille_patient',);
                }

            }

            // doc_t_b
            if ('/public/docTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::docTBAction',  '_route' => 'doc_t_b',);
            }

            // labo_t_b
            if ('/public/laboTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::laboTBAction',  '_route' => 'labo_t_b',);
            }

            // _img_t_b
            if ('/public/ImgTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::ImgTBAction',  '_route' => '_img_t_b',);
            }

            // _admin_t_b
            if ('/public/AdminTB' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\TBController::TBAdminAction',  '_route' => '_admin_t_b',);
            }

            // creer_acte
            if ('/public/creerActe' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ActesController::creerActeAction',  '_route' => 'creer_acte',);
            }

            // modifier_acte
            if (0 === strpos($pathinfo, '/public/modifierActe') && preg_match('#^/public/modifierActe/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_acte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ActesController::modifierActeAction',));
            }

            // _supprimer_acte
            if (0 === strpos($pathinfo, '/public/SupprimerActe') && preg_match('#^/public/SupprimerActe/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_supprimer_acte')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ActesController::SupprimerActeAction',));
            }

            // liste_actes
            if ('/public/listeActes' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ActesController::listeActesAction',  '_route' => 'liste_actes',);
            }

            // _cree_une_categorie
            if ('/public/CreeUneCategorie' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CategoriesController::CreeUneCategorieAction',  '_route' => '_cree_une_categorie',);
            }

            // _modifie_une_categorie
            if (0 === strpos($pathinfo, '/public/ModifieUneCategorie') && preg_match('#^/public/ModifieUneCategorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_modifie_une_categorie')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CategoriesController::ModifieUneCategorieAction',));
            }

            // _supprime_une_categorie
            if (0 === strpos($pathinfo, '/public/SupprimeUneCategorie') && preg_match('#^/public/SupprimeUneCategorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_supprime_une_categorie')), array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CategoriesController::SupprimeUneCategorieAction',));
            }

            // _liste_des_categories
            if ('/public/ListeDesCategories' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\CategoriesController::ListeDesCategoriesAction',  '_route' => '_liste_des_categories',);
            }

            // importe_les_patients
            if ('/public/importeLesPatients' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImporterDonneesController::importeLesPatientsAction',  '_route' => 'importe_les_patients',);
            }

            // importe_les_dependants
            if ('/public/dependantsimports' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\ImporterDonneesController::importeLesDependantsAction',  '_route' => 'importe_les_dependants',);
            }

            // inserer_les_actes
            if ('/public/insererlesactes' === $pathinfo) {
                return array (  '_controller' => 'hostoo\\GestionBundle\\Controller\\DefaultController::insererLesActesAction',  '_route' => 'inserer_les_actes',);
            }

            if (0 === strpos($pathinfo, '/public/les')) {
                // les_pathologies
                if ('/public/lesPathologies' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_les_pathologies;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\Cim10Controller::lesPathologiesAction',  '_route' => 'les_pathologies',);
                }
                not_les_pathologies:

                // les_episodes
                if ('/public/lesepisodes' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                        goto not_les_episodes;
                    }

                    return array (  '_controller' => 'hostoo\\SanteBundle\\Controller\\EpisodeController::lesepisodesAction',  '_route' => 'les_episodes',);
                }
                not_les_episodes:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
